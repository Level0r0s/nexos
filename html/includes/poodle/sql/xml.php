<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/xml.php,v $
	$Revision: 10.1 $
	$Author: djmaze $
	$Date: 2010/11/07 14:46:23 $
**********************************************/

class Poodle_SQL_XML
{
	public $queries;
	public $prefix;
	public $errors;

	protected $SQL;
	protected $platform;
	protected $tables;

	protected static $onDuplicateActions = array('ERROR','IGNORE','UPDATE');

	function __construct(Poodle_SQL $SQL)
	{
		$this->SQL = $SQL;
		$this->prefix = $this->SQL->TBL->prefix;
		$this->platform = strtolower($SQL->engine);
		$this->tables   = $SQL->list_tables();
	}

	public function import_data_from_file($file)
	{
		if (!$this->validate_file($file))
		{
			return false;
		}
		$this->queries = array();
		$xml = simplexml_load_file($file/*, null, LIBXML_NOCDATA*/);
		foreach ($xml->table as $table)
		{
			$name = $this->prefix.$table['name'];
			if (in_array($name,$this->tables)) $this->import_table_data($table, $name);
		}
		$this->import_queries($xml->sql);
		return true;
	}

	public function validate_file($file)
	{
		libxml_use_internal_errors(true);
		$DOM = new DomDocument();
//		$DOM->loadXML($xmlString);
		$DOM->load($file);
		if (!$DOM->schemaValidate(dirname(__FILE__).'/xml/schema.xsd')) {
			$this->errors = libxml_get_errors();
			return false;
		}
		return true;
	}

	protected function valid_platform($item)
	{
		return (!$item['platform'] || $this->platform == strtolower($item['platform']));
	}

	protected function import_queries($sql)
	{
		if ($sql && $sql->query)
			foreach ($sql->query as $query)
				if ($this->valid_platform($query))
					$this->queries[] = trim(preg_replace('#{([a-z0-9_]+)}#s', $this->prefix.'$1', $query));
	}

	protected function import_table_data($table, $name=null)
	{
		if ($table->tr)
		{
			$name = $name ? $name : $this->prefix.$table['name'];
			try {
				$update = $this->SQL->count(substr($name,strlen($this->prefix)));
			} catch (Exception $e) { $update = false; }

			if ('ON-EMPTY'==$table['datamode'] && $update) {
				return;
			}

			$def_mode = intval(array_search($table['onduplicate'], self::$onDuplicateActions));
			$cols = array();
			foreach ($table->col as $col) $cols[] = (string)$col['name'];
			foreach ($table->tr as $record)
			{
				$mode = isset($record['onduplicate']) ? intval(array_search($record['onduplicate'], self::$onDuplicateActions)) : $def_mode;
				$row = array();
				if ($record->td) {
					$i = 0;
					foreach ($record->td as $col) {
						$v = trim((string)$col);
						$row[$cols[$i++]] = $col['isnull'] ? 'NULL' : ($col['israw'] ? $v : $this->SQL->quote($v));
					}
				} else {
					foreach ($record->children() as $k => $col) {
						$v = trim((string)$col);
						$row[$k] = $col['isnull'] ? 'NULL' : ($col['israw'] ? $v : $this->SQL->quote($v));
					}
				}
				$duplicate = '';
				$ignore = (1==$mode && $update)?' IGNORE':'';
				if (2==$mode && $update) {
					$duplicate = 'ON DUPLICATE KEY UPDATE';
					foreach ($row as $k => $v) $duplicate .= " $k=$v,";
					$duplicate = substr($duplicate,0,-1);
				}
				$this->queries[] = "INSERT{$ignore} INTO {$name} (".implode(',',array_keys($row)).") VALUES (".implode(',',$row).") {$duplicate}";
			}
		}
	}

	public function export_schema($stream=null)
	{
		$re = '#^'.$this->prefix.'(.+)$#D';
		$data = '<?xml version="1.0" encoding="UTF-8"?>
<schema version="1.0" name="'.$this->SQL->database.'">';

		foreach ($this->SQL->list_functions() as $name)
		{
			if (!preg_match($re, $name, $t)) continue;
			$proc = $this->SQL->get_function($name);
			$data .= "\n\n\t".'<function name="'.$t[1].'" returns="'.$proc['returns'].'">';
			foreach ($proc['parameters'] as $param)
				$data .= "\n\t\t".'<param name="'.$param['name'].'"'
					.($param['dir']?' direction="'.$param['dir'].'"':'')
					.($param['type']?' type="'.$param['type'].'"':'')
					.($param['length']?' length="'.$param['length'].'"':'').'/>';
			$data .= "\n\t\t".'<body><![CDATA['.$proc['definition'].']]></body>';
			$data .= "\n\t".'</function>';
			if ($stream && (false !== fwrite($stream, $data))) { $data = ''; }
		}

		foreach ($this->SQL->list_procedures() as $name)
		{
			if (!preg_match($re, $name, $t)) continue;
			$proc = $this->SQL->get_procedure($name);
			$data .= "\n\n\t".'<procedure name="'.$t[1].'">';
			foreach ($proc['parameters'] as $param)
				$data .= "\n\t\t".'<param name="'.$param['name'].'"'
					.($param['dir']?' direction="'.$param['dir'].'"':'')
					.($param['type']?' type="'.$param['type'].'"':'')
					.($param['length']?' length="'.$param['length'].'"':'').'/>';
			$data .= "\n\t\t".'<body><![CDATA['.$proc['definition'].']]></body>';
			$data .= "\n\t".'</procedure>';
			if ($stream && (false !== fwrite($stream, $data))) { $data = ''; }
		}

		foreach ($this->SQL->list_tables() as $table)
		{
			if (!preg_match($re, $table, $t)) continue;
			$data .= "\n\n\t".'<table name="'.$t[1].'">';

			# columns
			foreach ($this->SQL->list_columns($table) as $name => $col)
			{
				preg_match('#([A-Z]+)(?:\s*\(([^\(\)]+)\))?(\s+BINARY)?#i',$col['type'], $m);
				$attr = array('type="'.$m[1].'"');
				if (!empty($m[2])) $attr[] = 'length="'.$m[2].'"';
				if (!empty($m[3])) $attr[] = 'binary="true"';
				if ($col['notnull']) $attr[] = 'notnull="true"';
				if (isset($col['default'])) $attr[] = 'default="'.$col['default'].'"';
				if ($col['comment']) $attr[] = 'comment="'.$col['comment'].'"';
				$data .= "\n\t\t".'<col name="'.$name.'" '.implode(' ',$attr).'/>';
			}

			# indexes
			foreach ($this->SQL->list_indexes($table) as $name => $key)
			{
				$data .= "\n\t\t".'<key name="'.$name.'"'.($key['type']?" type=\"{$key['type']}\"":'').'>';
				foreach ($key['columns'] as $name => $v)
					$data .= "\n\t\t\t".'<col name="'.$name.'"'.(strlen($name)!=strlen($v)?' length="'.substr($v,strlen($name)+1,-1).'"':'').'/>';
				$data .= "\n\t\t".'</key>';
			}
/*
			# foreign keys
			foreach ($this->SQL->list_foreign_keys($table) as $name => $key)
			{
				$name = preg_replace($re, '$1', $name);
				$key['references'] = preg_replace($re, '$1', $key['references']);
				$data .= "\n\t\t<key name=\"{$name}\" type=\"FOREIGN\" references=\"{$key['references']}\" ondelete=\"{$key['ondelete']}\" onupdate=\"{$key['onupdate']}\">";
				foreach ($key['columns'] as $name => $v) {
					$data .= "\n\t\t\t<col name=\"{$name}\"";
					if ($name !== $v) { $data .= " refcolumn=\"{$v}\""; }
					$data .= "/>";
				}
				$data .= "\n\t\t</key>";
			}

			# triggers
			foreach ($this->SQL->list_triggers($table) as $name => $trigger)
			{
				$data .= "\n\t\t".'<trigger name="'.$name.'" timing="'.$trigger['timing'].'" event="'.$trigger['event'].'"><![CDATA['.$trigger['statement'].']]></trigger>';
			}
*/
			$data .= "\n\t".'</table>';
			if ($stream && (false !== fwrite($stream, $data))) { $data = ''; }
		}

		foreach ($this->SQL->list_views() as $view)
		{
			if (!preg_match($re, $view, $t)) continue;
			$view = $this->SQL->get_view($view);
			$view['definition'] = preg_replace('# (from|left join) #',"\n\$1 ", preg_replace('#(^select |,)#',"\$1\n\t",$view['definition']));
			$data .= "\n\n\t".'<view name="'.$t[1].'"><![CDATA['.$view['definition'].']]></view>';
			if ($stream && (false !== fwrite($stream, $data))) { $data = ''; }
		}

		$data .= "\n</schema>";
		if ($stream && (false !== fwrite($stream, $data))) { return true; }
		return $data;
	}

}

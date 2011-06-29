<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/xml/postgresql.php,v $
	$Revision: 10.1 $
	$Author: djmaze $
	$Date: 2010/11/11 21:38:18 $
**********************************************/

class Poodle_SQL_XML_PostgreSQL extends Poodle_SQL_XML
{

	public function sync_schema_from_file($file)
	{
		if (!$this->validate_file($file))
		{
			return false;
		}
		$this->queries = array();

		$xml = simplexml_load_file($file/*, null, LIBXML_NOCDATA*/);
		foreach ($xml->children() as $item)
		{
			$name = $this->prefix.$item['name'];
			if (!$this->valid_platform($item)) continue;
			switch ($item->getName())
			{
			case 'function':
			case 'procedure':
				break;

			case 'table':
				if (in_array($name,$this->tables)) {
					$q = array();
					# columns
					$cols = $this->SQL->list_columns($name);
					foreach ($item->col as $field)
					{
						if (!$field['type']) continue;
						$m = null;
						$n = (string)$field['name'];
						$t = $this->get_type($field);
						if (isset($cols[$n])) {
							$col = $cols[$n];
							if ($col['type'] !== $t) {
								$q[] = "ALTER COLUMN {$field['name']} TYPE {$t}";
							}
							if ($col['notnull'] != ('true'==$field['notnull'])) {
								$q[] = "ALTER COLUMN {$field['name']} ".('true'==$field['notnull']?'SET':'DROP')." NOT NULL";
							}
							if ($col['default'] != $field['default'] || isset($col['default']) != isset($field['default'])) {
								$q[] = "ALTER COLUMN {$field['name']} ".(isset($field['default']) ? "SET DEFAULT '{$field['default']}'" : 'DROP DEFAULT');
							}
							if ($col['comment'] != $field['comment'] && $field['comment']) {
								$this->queries[] = "COMMENT ON COLUMN {$name}.{$field['name']} IS ".$this->SQL->quote($field['comment']);
							}
						} else
						if ($field['oldname'] && isset($cols[(string)$field['oldname']])) {
							$q[] = "RENAME COLUMN {$field['oldname']} TO {$n}";
						} else {
							$m = 'ADD COLUMN';
						}
						if ($m) $q[] = $m.' '.$this->get_field_specification($field);
					}
					# indexes and foreign keys
					$keys = $this->SQL->list_indexes($name);
					$fkeys = null;
					foreach ($item->key as $key)
					{
						if (!$this->valid_platform($key)) continue;
						$n = (string)$key['name'];
						if ('FOREIGN' == $key['type']) {
							$n = $this->prefix.$n;
							$fkeys = is_null($fkeys) ? $this->SQL->list_foreign_keys($name) : $fkeys;
							if (!isset($fkeys[$n])
							 || $fkeys[$n]['references']!=$this->prefix.$key['references']
							 || $fkeys[$n]['ondelete']!=$key['ondelete']
							 || $fkeys[$n]['onupdate']!=$key['onupdate']
							) {
								if (isset($fkeys[$n])) $q[] = "DROP FOREIGN KEY {$n}";
								$q[] = "ADD ".$this->get_foreign_key($key);
							}
						} else {
							$fields = array();
							foreach ($key->col as $field) {
								$fn = (string)$field['name'];
								$fields[$fn] = $fn;//.($field['length']?"({$field['length']})":'');
							}
							$primary = 'PRIMARY'==$n;
							$ADD = false;
							if (isset($keys[$n])) {
								$ADD = !$primary && $keys[$n]['type']!=$key['type'];
								if (!$ADD) foreach ($fields as $k => $v)
								{
									if (!isset($keys[$n]['columns'][$k]) || $keys[$n]['columns'][$k] != $v) {
										$ADD = true;
										break;
									}
								}
								if ($ADD) $q[] = ($primary ? "DROP PRIMARY KEY" : "DROP INDEX {$n}");
							}
							if (!isset($keys[$n]) || $ADD) {
								$q[] = ($primary ? "ADD PRIMARY KEY" : "ADD ".$key['type']." INDEX {$n}").' ('.implode(', ',$fields).')';
							}
						}
					}
					if ($q) $this->queries[] = "ALTER TABLE {$name} ".implode(', ',$q);
					// ALTER TABLE $name ENGINE = MyISAM;
				} else {
					$this->tables[$name] = $name;
					$this->create_table($item);
				}
				$this->import_table_data($item, $name);
				break;

			case 'view':
				if (strlen($item)) {
					$body = preg_replace('#{([a-z0-9_]+)}#s', $this->prefix.'$1', $item);
					$this->queries[] = "CREATE OR REPLACE VIEW {$name} AS {$body}";
				}
				break;

			case 'sql':
				$this->import_queries($item);
				break;
			}
		}
		return true;
	}

	private function create_table($table)
	{
		$name = $this->prefix.$table['name'];
		$fields = $keys = $comments = array();
		foreach ($table->col as $field) {
			$fields[] = $this->get_field_specification($field);
			if ($field['comment']) $comments[] = "COMMENT ON COLUMN {$name}.{$field['name']} IS ".$this->SQL->quote($field['comment']);
		}
		foreach ($table->key as $key)
		{
			if (!$this->valid_platform($key)) continue;
			$key_fields = array();
			foreach ($key->col as $field)
			{
				$n = (string)$field['name'];
				$key_fields[$n] = $n;//.($field['length']?"({$field['length']})":'');
			}
			$key_fields = implode(',',$key_fields);
			if ('PRIMARY' == $key['name']) {
				$fields[] = "PRIMARY KEY ({$key_fields})";
			} else
			if ('FOREIGN' == $key['type']) {
				$fields[] = $this->get_foreign_key($key);
			} else {
				$keys[] = "CREATE {$key['type']} INDEX {$key['name']} ON {$name} ({$key_fields})";
			}
		}
		$this->queries[] = "CREATE TABLE {$name} (".implode(', ',$fields).")";
		if ($table['comment']) $comments[] = "COMMENT ON TABLE {$name} IS ".$this->SQL->quote($table['comment']);
		$this->queries = array_merge($this->queries, $keys, $comments);

		foreach ($table->trigger as $trigger)
		{
			if (!$this->valid_platform($trigger)) continue;
			$this->queries[] = "CREATE TRIGGER {$trigger['name']} {$trigger['timing']} {$trigger['event']} ON {$name} FOR EACH ROW {$trigger}";
		}
	}

	private function get_foreign_key($key)
	{
		$ref_fields = array();
		foreach ($key->col as $field)
		{
			$n = (string)$field['name'];
			$ref_fields[$n] = $field['refcolumn']?(string)$field['refcolumn']:$n;
		}
		if ('FOREIGN' == $key['type']) {
			return "CONSTRAINT {$this->prefix}{$key['name']} FOREIGN KEY (".implode(',',array_keys($ref_fields)).") REFERENCES {$this->prefix}{$key['references']} (".implode(',',$ref_fields).")"
				.($key['ondelete']?" ON DELETE {$key['ondelete']}":'')
				.($key['onupdate']?" ON UPDATE {$key['onupdate']}":'');
		}
	}

	private function get_field_specification($field)
	{
		$v = $field['name'].' '.$this->get_type($field);
		if ($field['notnull']) $v .= ' NOT NULL';
		if (isset($field['default'])) $v .= " DEFAULT '{$field['default']}'";
		return $v;
	}

	private function get_type($field)
	{
		$t = (string)$field['type'];
		if ('BLOB'==$t || 'BINARY'==$t || 'VARBINARY'==$t) {
			return 'BYTEA';
		}
		if ('TINYINT'==$t)   { return 'SMALLINT'; }
		if ('MEDIUMINT'==$t) { return 'INTEGER'; }
		if ($field['length']) { $t .= "({$field['length']})"; }
		return $t;
	}

}

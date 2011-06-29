<?php
/*********************************************
 *  CPG Dragonfly™ CMS
 *********************************************
	Copyright © since 2010 by CPG-Nuke Dev Team
	http://dragonflycms.org

	Dragonfly is released under the terms and conditions
	of the GNU GPL version 2 or any later version

	$Source: /cvs/html/includes/poodle/sql/manager/postgresql.php,v $
	$Revision: 10.4 $
	$Author: djmaze $
	$Date: 2010/11/13 01:07:40 $
**********************************************/

/*
CREATE SEQUENCE seqname
CREATE TABLE products (price numeric CONSTRAINT positive_price CHECK (price > 0));
CREATE TABLE orders (
    order_id integer PRIMARY KEY,
    product_no integer REFERENCES products (product_no) ON DELETE CASCADE,
    quantity integer
);
FOREIGN KEY (b, c) REFERENCES other_table (c1, c2)
ALTER TABLE `test`.`child` DROP FOREIGN KEY `child_parent`;
ALTER TABLE `test`.`child` ADD CONSTRAINT `child_parent` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`id`) ON UPDATE NO ACTION;
NO ACTION, CASCADE delete child as well, RESTRICT, SET NULL and SET DEFAULT.
*/

class Poodle_SQL_Manager_PostgreSQL
{
	protected $SQL;

	function __construct($sql) { $this->SQL = $sql; }

	public function list_databases()
	{
		$result = $this->SQL->query('SELECT datname FROM pg_database');
		$databases = array();
		while (list($name) = $result->fetch_row()) { $databases[$name] = $name; }
		$result->free();
		return $databases;
	}

	public function list_tables($detailed=false)
	{
		$result = $this->SQL->query('SELECT tablename FROM pg_catalog.pg_tables WHERE tableowner = current_user');
		$tables = array();
		while (list($tblname) = $result->fetch_row()) { $tables[$tblname] = $tblname; }
		$result->free();
		return $tables;
	}

	public function list_columns($table, $uniform=true, $full=true)
	{
/*
		$query = "SELECT
			a.attname AS column_name,
			CASE t.typname
				WHEN 'int2' THEN 'smallint'
				WHEN 'int4' THEN 'integer'
				WHEN 'int8' THEN 'bigint'
				WHEN 'bpchar' THEN 'character'
				WHEN 'varchar' THEN 'character varying'
				WHEN 'float4' THEN 'real'
				WHEN 'float8' THEN 'double precision'
				ELSE t.typname
			END AS data_type,
			t.typname AS udt_name,
			CASE a.attlen
				WHEN -1 THEN
					CASE t.typname
						WHEN 'numeric' THEN (a.atttypmod / 65536)
						WHEN 'decimal' THEN (a.atttypmod / 65536)
						WHEN 'money'   THEN (a.atttypmod / 65536)
						ELSE CASE a.atttypmod
							WHEN -1 THEN NULL
							ELSE a.atttypmod - 4
						END
					END
				ELSE a.attlen
			END AS character_maximum_length,
			CASE WHEN a.attnotnull THEN 'NO' ELSE 'YES' END AS is_nullable,
			ad.adsrc AS column_default,
			cd.description AS comment
		FROM pg_class c
		INNER JOIN pg_attribute a ON (a.attnum > 0 AND a.attrelid = c.oid)
		INNER JOIN pg_type t ON (t.oid=a.atttypid)
		LEFT JOIN pg_attrdef ad ON (ad.adrelid = c.oid AND ad.adnum = a.attnum AND a.atthasdef)
		LEFT JOIN pg_description cd ON (cd.objoid = c.oid AND cd.objsubid = a.attnum)
		WHERE c.relname = '{$table}'
		ORDER BY a.attnum";
*/
		$full = $full
			? '(SELECT d.description
			FROM pg_description d, pg_class c, pg_attribute a
			WHERE a.attname=column_name AND a.attnum > 0 AND a.attrelid = c.oid
			  AND c.relname = table_name
			  AND d.objoid = c.oid AND d.objsubid = a.attnum
			)'
			: "''";
		$query = "SELECT column_name, data_type, udt_name, character_maximum_length, is_nullable, column_default,
			{$full} AS comment
		FROM information_schema.columns
		WHERE table_name='{$table}'
		ORDER BY ordinal_position";

		if ($result = $this->SQL->query($query))
		{
			$return = array();
			while ($row = $result->fetch_assoc()) {
				$row['data_type'] = preg_replace('#^([a-z\s]+)#e', 'strtoupper(\'$1\')', $row['data_type']);
				# do we have an serial ?
				if (strpos($row['column_default'], 'nextval(') !== false) {
					if ($row['data_type'] === 'INTEGER') {
						$row['data_type'] = 'SERIAL';
					} else {
						$row['data_type'] = 'BIGSERIAL';
					}
					$row['column_default'] = '';
				} else if (strpos($row['data_type'], 'CHAR') !== false) {
					$row['data_type'] .= '('.$row['character_maximum_length'].')';
				}
				if ($uniform)
				{
					$row['data_type'] = str_replace(
						array('CHARACTER VARYING', 'CHARACTER', 'INTEGER'),
						array('VARCHAR',           'CHAR',      'INT'),
						$row['data_type']);
				}
				if (preg_match('#^([\d]+|\'(.*)?\')#',$row['column_default'], $match)) {
					$row['column_default'] = isset($match[2])?$match[2]:$match[1];
				} else {
					$row['column_default'] = null;
				}
				$return[$row['column_name']] = array(
					'type'  => $row['data_type'],
					'notnull' => $row['is_nullable'] === 'NO',
					'default' => $row['column_default'],
					'extra' => null,
					'comment' => $row['comment']
				);
			}
			$result->free();
			return $return;
		}
		return false;
	}

	public function list_indexes($table)
	{
		$return = array();
		# CREATE TABLE will create implicit sequence "poodle_resources_resource_id_seq" for serial column "poodle_resources.resource_id"
		# CREATE TABLE / PRIMARY KEY will create implicit index "poodle_innodb_tablecount_pkey" for table "poodle_innodb_tablecount"
		if ($result = $this->SQL->query('SELECT
				CASE WHEN i.indisprimary THEN \'PRIMARY\' ELSE (SELECT relname FROM pg_class WHERE oid = i.indexrelid) END,
				CASE WHEN i.indisprimary THEN \'PRIMARY\' WHEN i.indisunique THEN \'UNIQUE\' ELSE \'\' END,
				ca.attname
			FROM pg_class tc, pg_index i, pg_attribute ca
			WHERE (tc.relname = \''.$table.'\')
				AND (i.indrelid = tc.oid)
				AND (ca.attrelid = tc.oid)
				AND (ca.attnum = ANY (i.indkey))'))
		{
			while ($row = $result->fetch_row()) {
				$key = $row[0]; // str_replace($table.'_', '', $row[0])
				$return[$key]['type'] = $row[1];
				$return[$key]['columns'][$row[2]] = $row[2];
			}
			$result->free();
		}
		return $return;
	}

	public function list_foreign_keys($table)
	{
		$return = array();
		try {
			if ($result = $this->SQL->query("SELECT
				rc.constraint_name,
				ref.table_name AS referenced_table_name,
				rc.delete_rule,
				rc.update_rule,
				kcu.column_name,
				ref.column_name AS referenced_column_name
			FROM information_schema.referential_constraints AS rc
			INNER JOIN information_schema.key_column_usage AS kcu ON (kcu.constraint_catalog=rc.constraint_catalog AND kcu.constraint_schema=rc.constraint_schema AND kcu.constraint_name=rc.constraint_name)
			INNER JOIN information_schema.key_column_usage AS ref ON (ref.constraint_catalog=rc.constraint_catalog AND ref.constraint_schema=rc.constraint_schema AND ref.constraint_name=rc.unique_constraint_name AND ref.ordinal_position=kcu.position_in_unique_constraint)
			WHERE rc.constraint_catalog='{$this->SQL->database}' AND kcu.table_name='{$table}'
			ORDER BY kcu.ordinal_position"))
			{
				while ($row = $result->fetch_row()) {
					$key = $row[0];
					$return[$key]['references'] = $row[1];
					$return[$key]['ondelete']   = $row[2];
					$return[$key]['onupdate']   = $row[3];
					$return[$key]['columns'][$row[4]] = $row[5];
				}
				$result->free();
			}
		} catch (Poodle_SQL_Exception $e) {}
		return $return;
	}

	public function list_triggers($table)
	{
/*
		SELECT tgname, tgargs, proname, prosrc FROM pg_trigger, pg_class, pg_proc WHERE pg_proc.oid=pg_trigger.tgfoid AND pg_trigger.tgrelid = pg_class.oid WHERE relname = \''.strtolower($table)
		CREATE FUNCTION [proname]() RETURNS trigger AS $$ [prosrc] $$ LANGUAGE plpgsql VOLATILE;
		CREATE TRIGGER [tgname] AFTER INSERT ON poodle_resources FOR EACH ROW EXECUTE PROCEDURE [proname]('[tgargs]');
*/
		try {
			$result = $this->SQL->query("SELECT trigger_name, condition_timing, event_manipulation, action_statement FROM information_schema.triggers WHERE event_object_catalog='{$this->SQL->database}' AND event_object_table='{$table}'");
			$return = array();
			while ($row = $result->fetch_row()) {
				$return[$row['Trigger']] = array(
					'name'  =>$row[0],
					'timing'=>$row[1],
					'event' =>$row[2],
					'statement'=>$row[3],
				);
			}
			$result->free();
			return $return;
		} catch (Poodle_SQL_Exception $e) {}
		return false;
	}

	public function list_views()
	{
		try {
			$result = $this->SQL->query("SELECT table_name, view_definition FROM information_schema.views WHERE table_catalog='{$this->SQL->database}'");
			$views  = array();
			while ($row = $result->fetch_row()) { $views[$row[0]] = $row[0]; }
			$result->free();
			return $views;
		} catch (Poodle_SQL_Exception $e) {}
		return false;
	}

	public function get_view($name)
	{
		return false;
	}

	public function list_functions()
	{
		return false;
	}

	public function get_function($name)
	{
		return false;
	}

	public function list_procedures()
	{
		return false;
	}

	public function get_procedure($name)
	{
		return false;
	}

	public function analyze($tables)  { return $this->SQL->query('ANALYZE'); }
	public function check($tables)    { return $this->SQL->query('VACUUM ANALYZE'); }
	public function optimize($tables) { return $this->SQL->query('VACUUM FULL'); }
	public function repair($tables)   { return false; }
	public function status()          { return false; }

	public function server_status()   { return false; }
	public function server_processes(){ return false; }

}

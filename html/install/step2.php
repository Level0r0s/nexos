<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 2013 by Myndworx Asylum                   |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 | 
  +-------------------------------------------------------------------+
  | step2.php - NexOS installation step 2 - Setup configuration file  |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/
if (!defined('INSTALL')) { exit; }

$connected = false;
$db_layers = array(
	'mysql' => 'mysql_connect',
	'mysqli' => 'mysqli_connect',
	'postgresql' => 'pg_connect'
);

if (!isset($_POST['download'])) { inst_header(); }
if (file_exists($config_file)) {
	$go_connect = true;
	$connect = array(
		'layer' => DB_TYPE,
		'charset' => DB_CHARSET,
		'host' => $dbhost,
		'port' => $dbport,
		'database' => $dbname,
		'username' => $dbuname,
		'password' => $dbpass,
		'prefix' => $prefix,
		'user_prefix' => $user_prefix
	);
} else if (isset($_POST['connect'])) {
	$go_connect = true;
	$connect = $_POST['connect'];
	define('DB_TYPE', $connect['layer']);
	define('DB_CHARSET', NULL);
} else {
	$go_connect = false;
	$connect = array(
		'layer' => 'mysql',
		'charset' => NULL,
		'host' => 'localhost',
		'port' => null,
		'database' => 'nexos',
		'username' => '',
		'password' => '',
		'prefix' => 'nxscms',
		'user_prefix' => 'nxscms'
	);
}
if ($go_connect) {
	if (!isset($_POST['download'])) { echo '<h2>'.$instlang['s1_trying_to_connect'].'</h2>'; }
	$db = new Poodle_SQL_Dragonfly($connect['host'], $connect['username'], $connect['password'], $connect['database']);
	$connected = true;
	if ('PostgreSQL' == $db->engine && $connect['database'] == 'public') {
		inst_header();
		echo '<br /><br />'.$instlang['s1_wrong_database_name'];
		footer();
		exit;
	}
	$server = get_db_vars($db);
	if ('MySQL' == $db->engine && $server['unicode'] && ($server['character_set_database'] != 'utf8' || $server['collation_database'] != 'utf8_general_ci')) {
		$db->query("ALTER DATABASE {$connect['database']} DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci");
	}
	if ('PostgreSQL' == $db->engine) {
		# $db->query("SET SESSION AUTHORIZATION {$connect['username']}");
		$db->query("CREATE SCHEMA {$connect['database']} AUTHORIZATION {$connect['username']}");
		$db->query("REVOKE ALL ON SCHEMA {$connect['database']} FROM PUBLIC");
		$db->query("ALTER USER {$connect['username']} SET search_path TO {$connect['database']}");
		$db->query("ANALYZE");
		# Create some functions so that some MySQL-isms can be used in PostgreSQL.
		$db->query("CREATE OR REPLACE FUNCTION left(character varying, integer) RETURNS character varying AS 'select substr($1, 0, $2) as result' LANGUAGE sql");
		$db->query("CREATE OR REPLACE FUNCTION unix_timestamp(timestamp without time zone) RETURNS integer AS 'SELECT DATE_PART(''epoch'', $1)::INT4 as RESULT' LANGUAGE sql");
		$db->query("CREATE OR REPLACE FUNCTION rand() RETURNS double precision AS 'SELECT RANDOM() as RESULT' LANGUAGE sql");
		$db->query("CREATE OR REPLACE FUNCTION concat(text, text) RETURNS text AS 'select $1 || $2' LANGUAGE sql IMMUTABLE STRICT");
		$db->query("CREATE OR REPLACE FUNCTION concat(text, text, text) RETURNS text AS 'select $1 || $2 || $3' LANGUAGE sql IMMUTABLE STRICT");
		$db->query("CREATE OR REPLACE FUNCTION concat(text, text, text, text) RETURNS text AS 'select $1 || $2 || $3 || $4' LANGUAGE sql IMMUTABLE STRICT");
	}
}
if ($connected) {
	$server = get_db_vars($db);
	if ('MySQL' == $db->engine && $server['unicode']) {
		if ($server['character_set_client'] != 'utf8' || $server['character_set_connection'] != 'utf8' || $server['character_set_results'] != 'utf8' || $server['collation_connection'] != 'utf8_general_ci') {
			$connect['charset'] = 'utf8';
		}
	}
	$written = false;
	if (!isset($CensorList)) {
		include(BASEDIR.'install/config.php');
		if (isset($_POST['download'])) {
			header('Content-Type: text/x-delimtext; name="config.php"');
			header('Content-disposition: attachment; filename=config.php');
			echo $content;
			exit;
		}
		$written = false;
		if ($fp = fopen($config_file, 'wb')) {
			$written = (fwrite($fp, $content) !== false);
			fclose($fp);
			chmod($config_file, 0644);
		}
		if ($written) {
			echo '<h1>'.$instlang['s1_save_conf_succeed'].'</h1>';
		} else {
			echo '<h1>'.$instlang['s1_save_conf_failed'].'</h1>';
		}
	} else {
		echo '<h1>'.$instlang['s1_db_connection_succeeded'].'</h1>';
		$written = true;
	}
	Cache::clear();
	if ($written) {
		echo '<p><input type="hidden" name="step" value="3" />
		<input type="submit" value="'.$instlang['next'].'" class="formfield" /></p>';
	} else {
		echo 'Instead download the config.php file and upload it to the server into:<br/>
		'.dirname($config_file).'/
		<p><input type="hidden" name="step" value="2" />
		<input type="hidden" name="connect[layer]" value="'.$connect['layer'].'" />
		<input type="hidden" name="connect[host]" value="'.$connect['host'].'" />
		<input type="hidden" name="connect[username]" value="'.$connect['username'].'" />
		<input type="hidden" name="connect[password]" value="'.$connect['password'].'" />
		<input type="hidden" name="connect[database]" value="'.$connect['database'].'" />
		<input type="hidden" name="connect[prefix]" value="'.$connect['prefix'].'" />
		<input type="hidden" name="connect[user_prefix]" value="'.$connect['user_prefix'].'" />
		<input type="submit" name="download" value="Download config.php" class="formfield" />
		<input type="submit" value="'.$instlang['next'].'" class="formfield" /></p>';
	}
} else {
	if (defined('NO_DB')) { echo '<h1>'.NO_DB.'</h1>'; }
	echo '
<script>
	$( "#progressbar" ).progressbar({
		value: 32
	});
</script>
<table>
	<tr>
	  <th colspan="2" nowrap="nowrap">'.$instlang['s1_dbconfig'].'</th>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_dbase'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td colspan="3"><hr noshade="noshade" size="1" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_layer'].'</td><td><select name="connect[layer]">';
	foreach ($db_layers as $layer => $func) {
		if (function_exists($func) && file_exists(CORE_PATH."poodle/sql/adapter/$layer.php")) {
			echo ($connect['layer'] == $layer) ? "<option selected=\"selected\">$layer</option>" : "<option>$layer</option>";
		}
	}
	echo '</td>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_layer'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_host'].'</td><td><input type="text" name="connect[host]" value="'.$connect['host'].'"></td>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_hostname'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_username'].'</td><td><input type="text" name="connect[username]" value="'.$connect['username'].'"></td>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_username'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_password'].'</td><td><input type="password" name="connect[password]" value="'.$connect['password'].'"></td>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_password'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_dbname'].'</td><td><input type="text" name="connect[database]" value="'.$connect['database'].'"></td>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_dbname'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_prefix'].'</td><td><input type="text" name="connect[prefix]" value="'.$connect['prefix'].'"></td>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_prefix'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td>'.$instlang['s1_userprefix'].'</td><td><input type="text" name="connect[user_prefix]" value="'.$connect['user_prefix'].'"></td>
	  <td><img src="images/help.gif" alt="" title="'.$instlang['s2_uprefix'].'" style="cursor: help;" /></td>
	</tr><tr>
	  <td colspan="3"><hr noshade="noshade" size="1" /></td>
	</tr>
</table>'
	.$instlang['s1_correct'].'<p align="center"><input type="hidden" name="step" value="2" />
	<input type="submit" value="'.$instlang['next'].'" class="formfield" /></p>
	</form>';
}

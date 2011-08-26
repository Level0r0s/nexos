<?php

global $dbal;

class NexOS_Doctrine implements \Doctrine\DBAL\Logging\SQLLogger {
	var $num_queries = 0;
	var $time = 0;
	var $query_list = array();
	var $query_start_time = 0;

	var $file;
	var $line;

	public function startQuery($sql, array $params = null, array $types = null) {
		$this->log($sql, $params, $types);
	}

	public function stopQuery($failed = false) {
		global $MAIN_CFG;
		$query_time = get_microtime() - $this->query_start_time;
		$this->time += $query_time;
		if (CPG_DEBUG || (is_admin() && !empty($MAIN_CFG['debug']['database']))) {
			// Increment $this->num_queries after storing the execution time
			$this->query_list[$this->file][$this->num_queries]['failed'] = $failed;
			$this->query_list[$this->file][$this->num_queries++]['time'] = $query_time;
		}
	}

	public function log($sql, array $params = null, array $types = null) {
		global $MAIN_CFG;
		$this->query_start_time = get_microtime();
		if (CPG_DEBUG || (is_admin() && !empty($MAIN_CFG['debug']['database']))) {
			$failed = false;
			$this->_backtrace();
			$new_log['line'] = $this->line;
			$new_log['query'] = htmlprepare($sql);
			$new_log['params'] = htmlprepare($params);
			$new_log['types'] = htmlprepare($types);
			$new_log['failed'] = $failed;
			$this->query_list[$this->file][$this->num_queries] = $new_log;
		}
	}

	private function _backtrace() {
		$this->file = 'unknown';
		$this->line = 0;
		$tmp = debug_backtrace();
		for ($i=0; $i<count($tmp); ++$i) {
			if (!preg_match('#[\\\/]{1}includes[\\\/]{1}db[\\\/]{1}[a-z_]+.php$#', $tmp[$i]['file']) && !preg_match('#[\\\/]{1}Doctrine[\\\/]{1}DBAL[\\\/]{1}Connection.php$#', $tmp[$i]['file'])) {
				$this->file = $tmp[$i]['file'];
				$this->line = $tmp[$i]['line'];
				break;
			}
		}
	}
}

//if (!defined('INSTALL')) {
	$conn_start_time = get_microtime();
	$connectionParams = array(
		'dbname' => $dbname,
		'user' => $dbuname,
		'password' => $dbpass,
		'host' => $dbhost,
		'port' => $dbport,
		'charset' => 'utf8',
		'driver' => 'pdo_mysql',
	);
	$config = new \Doctrine\DBAL\Configuration();
	$sql_logger = new NexOS_Doctrine();
	$config->setSQLLogger($sql_logger);
	$dbal = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
	$dbal->getConfiguration()->getSQLLogger()->time += get_microtime() - $conn_start_time;
//}

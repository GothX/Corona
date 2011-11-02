<?php
	class MySQL {
		function connect() {
			global $config;
			$this->c = mysql_connect($config['sql_host'],$config['sql_user'],$config['sql_pass']);
			if(!$this->c) {
				die("Unable to connect to MySQL.");
			}
		}
	}
	$db = new MySQL;
?>
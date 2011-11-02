<?php
	class MySQL {
		var $c;
		function connect() {
			global $config;
			$this->c = mysql_connect($config['sql_host'],$config['sql_user'],$config['sql_pass']);
			if(!$this->c) {
				die("Unable to connect to MySQL.");
			}
			$s = mysql_select_db($config['sql_db']);
			if(!$s) {
				die("Database doesn't exist.");
			}
		}
	}
	$db = new MySQL;
?>
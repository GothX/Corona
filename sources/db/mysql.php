<?php
	/*
		@author: Matthew Lutz
		@version: 0.0.1
		
		@page: sources/db/mysql.php
		@modified: November 02, 2011 - 01:50
	*/
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
		function get_config() {
			global $info;
			$cfg = array();
			$r = $this->query("SELECT * FROM 001_config");
			while($a = mysql_fetch_array($r)) {
				if(!is_int($a['ckey'])) {
					$cfg[$a['ckey']] = $a['cval'];
				}
			}
			$info->cfg = $cfg;
		}
		function query($q) {
			global $config;
			$q = str_replace("001_",$config['table_prefix'],$q);
			$r = mysql_query($q);
			if(!$r) {
				die("Config table doesn't exist.");
			}
			return $r;
		}
	}
	$db = new MySQL;
?>
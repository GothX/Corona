<?php
	/*
		@author: Matthew Lutz
		@version: 0.0.1
		
		@page: sources/session.php
		@modified: November 02, 2011 - 01:57
	*/
	class Sess {
		var $logged_in = false;
		function start() {
			session_start();
			$this->logged_in = $this->check_login();
		}
		function check_login() {
			if(isset($_COOKIE['username'])&&isset($_COOKIE['userkey'])) {
				$_SESSION['username'] = $_COOKIE['username'];
				$_SESSION['userkey'] = $_COOKIE['userkey'];
			}
			if(isset($_SESSION['username'])&&isset($_SESSION['userkey'])&&$_SESSION['username']!="Guest") {
			
			} else {
				$_SESSION['username'] = "Guest";
				$_SESSION['userkey'] = "0";
				return false;
			}
		}
	}
	$session = new Sess;
?>
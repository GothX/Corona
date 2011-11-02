<?php
	/*
		@author: Matthew Lutz
		@version: 0.0.1
		
		@page: index.php
		@modified: November 02, 2011 - 00:21
	*/
	include("./config.php");
	include("./sources/db/{$config['sql_type']}.php");
	include("./sources/session.php");
	$db->connect();
?>
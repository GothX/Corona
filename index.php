<?php
	/*
		@author: Matthew Lutz
		@version: 0.0.1
		
		@page: index.php
		@modified: November 02, 2011 - 01:33
	*/
	error_reporting(0);
	include("./config.php");
	include("./sources/db/{$config['sql_type']}.php");
	include("./sources/session.php");
	include("./sources/func.php");
	include("./sources/style.php");
	class info {
		var $lang;
		var $cfg;
		var $theme;
	}
	$info = new info;
	$db->connect();
	$db->get_config();
	$session->start();
	$fnc->set_lang();
	$fnc->set_theme();
	include("./lang/{$info->lang}/global.php");
	$act = (isset($_GET['act']))?$_GET['act']:(($info->cfg['use_portal']=="1")?"portal":"idx");
	$choices = array(
		"idx" 		=> "Boards",
		"portal"	=> "Home"
	);
	if(array_key_exists($act,$choices)) {
		include("./sources/{$choices[$act]}.php");
	}
?>
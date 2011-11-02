<?php
	$fnc = new Func;
	class Func {
		function set_lang() {
			global $session,$info;
			if($session->logged_in) {
			} else {
				$info->lang = $info->cfg['lang'];
			}
		}
		function set_theme() {
			global $session,$info;
			if($session->logged_in) {
			} else {
				$info->theme = $info->cfg['theme'];
			}
		}
	}
?>
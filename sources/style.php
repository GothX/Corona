<?php
	$style = new Style;
	class Style {
		function open($sec) {
			global $info;
			$r = file_get_contents("./style/{$info->theme}/{$sec}.php");
			if(!$r) {
				die("File doesn't exist ({$sec}.tpl).");
			}
		}
	}
?>
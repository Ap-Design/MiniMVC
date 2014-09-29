<?php require(PROTECT);

	class view {
		
		function load($view) {
			if(file_exists(VIEWS . $view . '.php'))
				require(VIEWS . $view . '.php');
			else
				die(FATAL_ERROR_OPEN.'View file <b>'.$view.'</b> was not found, and cannot be loaded.'.FATAL_ERROR_CLOSE);
		}
	}

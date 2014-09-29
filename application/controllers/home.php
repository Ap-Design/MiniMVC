<?php require(PROTECT);
	
	class Home extends Controller {
		function home() {
			/* We can load other resources here */
			parent::controller();
			
		}
		
		function index() {
			echo "miniMVC by ForkLabs, LLC.";
		}
		
		function test($var1, $var2, $var3) {
			echo "Test Controller ".$var1.", ".$var2.", and ".$var3;
		}
	}

	
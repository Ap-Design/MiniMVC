<?php require(PROTECT);
	
	# Our default controller
	
	# Note: The default controller does not accept parameters such as http://forklabsllc.com/parameter1/parameter2
	# This means index($param1, $param2) would be invalid.

	class Home extends Controller {
		function home() {
			# We can load other resources here
			parent::controller();
		}
		
		function index() {
			$this->view->load('home');
		}
		
		function test($var1, $var2, $var3) {
			echo "Test Controller ".$var1.", ".$var2.", and ".$var3;
		}
	}

	

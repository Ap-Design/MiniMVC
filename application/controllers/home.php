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

		# This is necessary if you have CONFIG/ERROR_OVERRIDE set to true.
		# To set error override to true, visit application/config/config.php line: 35
		function error_override() {
			echo '404 NOT FOUND';
		}
	}

	

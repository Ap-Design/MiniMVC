<?php

	/*	--------------------------- *	
	 *	MiniMVC Framework	v1.0.0	*
	 *	September 2014				*
	 *	Devontrae Marqualius Walls 	*
	 *	Devontrae@ForkLabsLLC.com	*
	 *	http://devontrae.com		*
	 *	--------------------------- *
			Notes to Devs
			-------------
			
	 I.		Please Keep all code clean, neat, and organized!
	 II.	Do not include the closing PHP tag (?>) at the end of
			scripts.
			
	 *	---------------------------	*
	 *	Lets define the Environment *
	 *	---------------------------	*/
		define('ENVIRONMENT', 'development');
		
		switch(ENVIRONMENT)
		{
			case 'development':
				error_reporting(E_ALL & ~E_NOTICE);
			break;
			default:
				error_reporting(E_ALL & ~E_NOTICE);
		}
	
	/*	----------------------------- *
	 * 	Now lets define our constants *
	 * 	----------------------------- */
	 
	define('BASE_PATH', dirname(realpath(__FILE__)));
	define('APPLICATION_PATH', BASE_PATH . '/application/');
	define('SYSTEM_PATH', BASE_PATH . '/system/');
	define('CONFIG_PATH', SYSTEM_PATH . 'config/');
	define('CORE_PATH', SYSTEM_PATH . '/core/');
	define('LIBRARIES', SYSTEM_PATH . 'libraries/');
	define('CONTROLLERS', APPLICATION_PATH . 'controllers/');
	define('MODELS', APPLICATION_PATH . 'models/');
	define('VIEWS', APPLICATION_PATH . 'views/');
	define('STYLE_PATH', BASE_PATH . '/style/');
	
	global $auth, $db;
	
	define('DATABASE_OBJECT', serialize($db));
	
	/*	------------------------------ *
	 *	   Protect our scripts from	   *
	 *	       direct access.		   *
	 *	------------------------------ */
	 
	 define('PROTECT', CONFIG_PATH . 'protect.php');

	/*	----------------------------- *
	 *	  Load the Core 			  *
	 *	----------------------------- */
			
	require(SYSTEM_PATH . 'core.php');

<?php

	define('DIRECTORY', realpath('.'));
	define('CONTROLLER', DIRECTORY . '/app/controller/');
	define('VIEW', DIRECTORY . '/app/view/');
	define('BASE_URL', "http://" . $_SERVER["SERVER_NAME"] . "/");
	define("LEVEL", 1); #  1 = development, 2 = production

	$app = [

		"directory" => DIRECTORY,

		"controller" => CONTROLLER,

		"view"	=> VIEW,

		"base_url" => BASE_URL,

		"app_name"	=> "RED FRAMEWORK",
		
		"database" => [
			"host" => "localhost",
		    "user" => "root",
		    "pass" => "",
		    "name" => "test",
		    "charset" => "utf-8"
		],

		"level" => LEVEL,

		// CURRENT LANGUAGE
		"language"	=> (isset($_SESSION["language"])) ? $_SESSION["language"] : "tr",
			
		// CACHE FILE EXPIRES | 1 DAY
		"cache.EXPIRE_DATE"	=> (1 * 24 * 60 * 60),

		// TIMEZONE
		"timezone"	=> 	"Europe/Istanbul"
	];

	function app($key = null) {
		global $app;
		if($key != NULL){
			if(array_key_exists($key, $app))
				return $app[$key];
		}
		else 
			return $app;
	}
	
	if(app("LEVEL")):
		error_reporting(E_ALL);
		ini_set('display_errors', 1); 
	else:
		error_reporting(0);
		ini_set('display_errors', 0); 
	endif;
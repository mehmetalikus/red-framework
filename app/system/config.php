<?php 

function APP(String $key = null) {
	
	$app = [

		"NAME"	=> "CUSTOM FRAMEWORK",

		"database" => [
			"host" => "localhost",
		    "user" => "root",
		    "pass" => "",
		    "name" => "redkit",
		    "charset" => "utf-8"
		],

		// CURRENT LANGUAGE
		"language"	=> (isset($_SESSION["language"])) ? $_SESSION["language"] : "tr",

			
		// CACHE FILE EXPIRES | 1 DAY
		"CACHE.EXPIRE_DATE"	=> (1 * 24 * 60 * 60),


		// TIMEZONE
		"Timezone"	=> 	"Europe/Istanbul"

	];

	if($key != NULL){
		return $app[$key];
	}
	else 
		return $app;
}
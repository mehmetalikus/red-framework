<?php 

function __($_key) {
	global $lang;

	if(isset($lang[$_key]))
		return $lang[$_key];
	else
	 	return $_key;
}


function changeLanguage(){
	if(isset($_SESSION["language"]) && $_SESSION["language"] == "tr"){
		echo 
			"<a href='".site_url("language/en")."' class='btn btn-warning'>"
			.__("Dil Değiştir").
			"</a>";
		;
	}
	elseif(isset($_SESSION["language"]) && $_SESSION["language"] == "en"){
		echo 
			"<a href='".site_url("language/tr")."' class='btn btn-warning'>"
			.__("Dil Değiştir").
			"</a>";
		;
	}
	else {
		echo 
			"<a href='".site_url("language/en")."' class='btn btn-warning'>"
			."Dil Değiştir".
			"</a>";
		;
	}
	
}
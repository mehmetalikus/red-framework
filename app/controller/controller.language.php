<?php 

if(isset($_URL[1])){
	
	$langCode = filterSTR($_URL[1]);
	if($langCode == "en" || $langCode == "tr"){
		$_SESSION["language"] = $langCode;
	}
}

header("Location:". $_SERVER["HTTP_REFERER"]);

?>
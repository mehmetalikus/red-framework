<?php 

class Language extends Controller
{
	public function switch($langCode = null){
		if($langCode != NULL){
			$langCode = filterSTR($_URL[1]);
			if($langCode == "en" || $langCode == "tr"){
				$_SESSION["language"] = $langCode;
			}
		}
		Header("Location:" . $_SERVER["HTTP_REFERER"]);
	}
}
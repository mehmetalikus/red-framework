<?php 

class Language extends Controller
{
	public function switch($langCode = null){
		if($langCode != NULL){
			$langCode = filterSTR($langCode);
			if($langCode == "en" || $langCode == "tr"){
				$_SESSION["language"] = $langCode;
			}
		}
		Header("Location:" . $_SERVER["HTTP_REFERER"]);
	}
}

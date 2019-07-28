<?php 

function __($_key) {
	global $lang;
	
	if(isset($lang[$_key]))
		return $lang[$_key];
	else
	 	return $_key;
}
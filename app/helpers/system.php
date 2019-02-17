<?php
/*
function controller($controllerName, $folder = ""){
    return CONTROLLER . $folder . "controller." . $controllerName . ".php";
}
*/

function layout($viewName, $folder = ""){
    return VIEW . $folder . "view." .$viewName . ".php";
}

function page_load_time($start){
	echo (microtime(true) - $start);
}
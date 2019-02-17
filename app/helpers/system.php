<?php

function controller($controllerName, $folder = ""){
    return CONTROLLER . $folder . "controller." . $controllerName . ".php";
}

function view($viewName, $folder = ""){
    return VIEW . $folder . "view." .$viewName . ".php";
}

function page_load($start){
	echo (microtime(true) - $start);
}
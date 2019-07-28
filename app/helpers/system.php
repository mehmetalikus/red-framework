<?php

function layout($viewName, $folder = ""){
    return VIEW . $folder . $viewName . ".php";
}

function page_load_time($start){
	echo (microtime(true) - $start);
}

/*
function model($name){
	require DIRECTORY . '/app/classes/Model/' . $name . '.php';
    return new $name();
}


function loadView($viewName, $folder = ""){
	$viewFile = VIEW . $folder . "view." . $viewName . ".php";
	if(file_exists($viewFile))
		require $viewFile;
}

function loadModel($name){
	$model = DIRECTORY . '/app/classes/Model/' . $name . '.php';
	if(file_exists($model)){
		require $model;
		return new $name();
	}
}
*/
<?php
session_start();

spl_autoload_register("load");
function load($fileName){
    $interfaceFiles = realpath('.') . "/app/interfaces/interface." . strtolower($fileName) . ".php";
    if(file_exists($interfaceFiles)){
            require_once $interfaceFiles;
    }
    
    $classFiles = realpath('.') . "/app/classes/class." . strtolower($fileName) . ".php";
    if(file_exists($classFiles)){
        require_once $classFiles;
    }
}
Helper::Load();

require_once "system/system.php";
require_once "system/config.php";
require_once "language/" . APP()["language"] . "/language.php";
require_once "routes.php";
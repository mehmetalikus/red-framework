<?php
session_start();

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
spl_autoload_register("load");

Helper::Load();

#$db = Database::connect();
#require_once "route.php"; # OPTIONAL
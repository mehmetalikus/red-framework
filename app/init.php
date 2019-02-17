<?php
session_start();

// spl_autoload_register !!
function __autoload($fileName){
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
require_once "system/config.php";
require_once "language/" . $config["language"] . "/language.php";

$db = Database::connect();
require_once "route.php"; # OPTIONAL
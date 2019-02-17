<?php 

$config["db"] = [
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "name" => "redkit",
    "charset" => "utf-8"
];


$config["language"] = (isset($_SESSION["language"])) ? $_SESSION["language"] : "tr";

define('DIRECTORY', realpath('.'));
define('CONTROLLER', DIRECTORY . '/app/controller/');
define('VIEW', DIRECTORY . '/app/view/');
define('BASE_URL', "http://" . $_SERVER["SERVER_NAME"] );
define('APP_NAME', "CUSTOM FRAMEWORK");

# 1 DAY
define('CACHE_EXPIRE_DATE', (1 * 24 * 60 * 60) );


# timezone # 
date_default_timezone_set('Europe/Istanbul');

# display all errors #
error_reporting(E_ALL);
ini_set('display_errors', 1);
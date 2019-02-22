<?php

define('DIRECTORY', realpath('.'));
define('CONTROLLER', DIRECTORY . '/app/controller/');
define('VIEW', DIRECTORY . '/app/view/');
define('BASE_URL', "http://" . $_SERVER["SERVER_NAME"] . "/custom-framework/" );
define("LEVEL", 1);

if(LEVEL){ error_reporting(E_ALL); ini_set('display_errors', 1); }
else { error_reporting(0); ini_set('display_errors', 0); }

date_default_timezone_set("Europe/Istanbul");
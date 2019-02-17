<?php

require_once "app/system/config.php";
require_once "app/language/" . $config["language"] . "/language.php";
require "app/init.php";



Route::get("/ajax", "ajax@index", "post");
Route::get("/", "Index@Dashboard");
Route::get("/ajaxExample", "Index@ajaxExample");
Route::get("/user/all", "User@getAll");
Route::get("/language/{url}", "Language@switch");
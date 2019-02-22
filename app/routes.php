<?php 

Route::get("/", "Index@Dashboard");
Route::get("/ajaxExample", "ajax@ajaxExample");
Route::get("/ajax", "ajax@index", "post");
Route::get("/language/{text}", "Language@switch");
Route::get("/user", "User@getAll");

Route::get("/user/{id}", function(Int $id): Void {
	echo "User ID : " . $id;
}, "GET|POST");
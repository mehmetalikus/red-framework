<?php
/*
	THIS IS THE WHERE YOU SET MANUAL ROUTES & Other Things.
	
	@important
	IF YOU WANT SOME MANUAL ROUTES YOU SHOULD WRITE THEM FIRST.
	IF YOU DON'T YOUR RULE WONT WORK

	Route::start() gives you dynamic route function.
	for example if your url like this {
		http://example.com/Product/Update/1

		Product is your ClassName
		Update is your Method inside Product
		1 is your parameter. After ClassName & Method everything in uri is your parameter.
	}
	
	Good Luck
*/

Route::run("/", "Index@Welcome");
Route::start();
<?php

Route::get("/merhaba", function(){
	echo __("Merhaba");
});

Route::get("/user/all", function(){
	global $db; # :/
	$query = $db->prepare("SELECT * FROM user");
	if($query->execute() && $query->rowCount() > 0)
	{
		echo json_encode($query->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
	}
});

Route::get("/user/{id}", function(Int $id){
	echo "User Id : " . $id;
});
<?php 

if(post("name") && post("age")){
	
	$name =  post("name");
	$age =  post("age");

	echo json_encode(["status"=>true, "message" => __("Başarılı"), "user" => $name, "age" => $age],  JSON_UNESCAPED_UNICODE);
}
else
	echo json_encode(["status" => false, "message" => __("Boş post")], JSON_UNESCAPED_UNICODE);
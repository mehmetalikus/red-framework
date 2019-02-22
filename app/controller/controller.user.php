<?php

class User extends Controller
{
		
	public function getAll(){
	 	$usersModel = $this->model('UserModel');
		$users = $usersModel->getAll();

		echo json_encode($users, JSON_UNESCAPED_UNICODE);

	}

}
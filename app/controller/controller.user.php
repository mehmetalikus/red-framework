<?php

class User extends Controller
{
		
	public function getAll(){
	 	$usersModel = $this->model('usermodel');
		$user = $usersModel->getAll();

		$this->view([
			"userList" => $user
		], "deneme", "d/");

	}

}
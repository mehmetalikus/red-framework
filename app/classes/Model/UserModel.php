<?php 

class UserModel extends Database
{
    private $userId;
    private $userName;
    private $userLastName;

    public function __construct(){
        parent::__construct();
    }

    public function __get($p){
        return $this->$p
    }

    public function __set($k, $v){
        return $this->$k = $v;
    }

}
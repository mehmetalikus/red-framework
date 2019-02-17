<?php

class Database implements IDatabase
{
	/*
	private $host = "localhost";
	private $database = "redkit";
	private $user = "root";
	private $password = "";
	*/
	protected $db;

	public function __construct(){
		try {

		    $this->db = new PDO("mysql:host=localhost;dbname=redkit;charset=utf8","root", "");
		    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		        
		}
		catch(PDOException $e){
		    echo $e->getMessage();
		}

	}
}
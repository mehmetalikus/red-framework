<?php

class Database implements IDatabase
{

	private static $host = "localhost";
	private static $database = "redkit";
	private static $user = "root";
	private static $password = "";
	//
	private static $db;

	public static function connect(){
		try {

		    self::$db = new PDO("mysql:host=".self::$host.";dbname=".self::$database.";charset=utf8", self::$user, self::$password);
		    self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		        
		}
		catch(PDOException $e){
		    echo $e->getMessage();
		}

		return self::$db;
	}
}
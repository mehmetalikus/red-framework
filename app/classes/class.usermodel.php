<?php 

class UserModel extends Database
{
	private $id;
	private $name;
	private $lastName;

	protected $collection = [];

	public function getAll(){
		$query = $this->db->prepare("
			SELECT * FROM user
		");
		if($query->execute()){
			$this->collection = $query->fetchAll(PDO::FETCH_ASSOC);
			return $this->collection;
		}
		else
			$conn = null;
		return false;
	}

}
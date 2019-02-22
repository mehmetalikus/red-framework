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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param mixed $collection
     *
     * @return self
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;

        return $this;
    }
}
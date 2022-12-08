<?php 
namespace App\classes;

class Database{

	private $hostName,$userName,$password,$databaseName,$link;

	public function __construct()
	{
		$this->hostName = 'localhost';
		$this->userName = 'root';
		$this->password = '';
		$this->databaseName = 'blog_website';
	}

	public function dbConnect()
	{
		$this->link = mysqli_connect($this->hostName,$this->userName,$this->password,$this->databaseName);

		//check connection
    if($this->link->connect_error)
    {
      echo "Failed to connect MySQL: " . $this->link->connect_error;
      exit();
    }
    else
    {
      return $this->link;
    }
    
	}
}
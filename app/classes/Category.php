<?php 
namespace App\classes;
use App\classes\Database;

class Category
{
	private $category_name;

	private $sql,$is_save,$conn,$database ,$queryResult ,$row , $data=[];

	public function __construct($post=null)
	{
		if($post != null)
		{
			$this->category_name = $post['category_name'];

			if (isset($post['update_id'])) 
			  {

			  	$this->update_id = $post['update_id']; 
		    }
		
		}

		
		$this->database = new Database();

    $this->conn = $this->database->dbConnect();
	}

	public function saveCategory()
	{
      
      $this->sql = "INSERT INTO categories (category_name) VALUES ('$this->category_name')";

      $this->is_save = mysqli_query($this->conn, $this->sql);

    if($this->is_save)
     {
      return "Record save successfully";
     }
    else
    {
      return "Record not save, try again...";
    }

	}



	public function getAllCategory()
	{
		$this->sql = "SELECT * FROM categories";

	    $this->queryResult = mysqli_query($this->conn, $this->sql);

	    while($this->row = mysqli_fetch_assoc($this->queryResult))
	    {
	      array_push($this->data, $this->row);
	    }
	    return $this->data;


	}


	public function getCategoryById($id)
  {
    $this->sql = "SELECT * FROM categories WHERE id = '$id'";
    $this->queryResult = mysqli_query($this->conn, $this->sql);
    $this->data = mysqli_fetch_assoc($this->queryResult);
    return $this->data;
  }


  public function UpdateCategory()
  {
  	 $this->sql = "UPDATE categories SET category_name = '$this->category_name' WHERE id='$this->update_id'";
  	 $this->queryResult = mysqli_query($this->conn, $this->sql);



  }




}
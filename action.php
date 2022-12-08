<?php 
session_start();
require_once 'vendor/autoload.php';
use App\classes\Category;

$category = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page'])) {
	
	if ($_GET['page']=='home') {
		include 'pages/home.php';
	}

	if ($_GET['page']=='add-category') {
		include 'pages/add_category.php';
	}

	if ($_GET['page']=='manage-category') {

		$category = new Category();
    $categories = $category->getAllCategory();

		include 'pages/manage_category.php';
	}


	if ($_GET['page']=='edit') {

    $cat_id = $_GET['id'] ;

		$category = new Category();

    $singlecategories = $category->getCategoryById($cat_id);
    
		include 'pages/edit_category.php';
	}




   if($_GET['page'] == 'category-blog')
  {
    // $category_id = $_GET['category-id'];
    // $product = new Product();
    // $catWiseProduct = $product->getProductByCategory($category_id);
    // // echo "<pre>";
    // // var_dump($catWiseProduct);
    // // echo "</pre>";
    include 'pages/category-blog.php';
  }


  if ($_GET['page']=='add-blog') 
  {
		include 'pages/add_blog.php';
	}



}



else if (isset($_POST['saveCategory'])) 
{

	$category = new Category($_POST);

	$result = $category->saveCategory();

	$_SESSION['result'] =$result;

  header('Location: action.php?page=add-category');
}


else if (isset($_POST['updateCategory'])) 
{

	$category = new Category($_POST);

	$result = $category->UpdateCategory();

	$_SESSION['result'] =$result;

  header('Location: action.php?page=manage-category');
}
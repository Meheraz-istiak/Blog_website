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
}



else if (isset($_POST['saveCategory'])) {

	$category = new Category($_POST);

	$result = $category->saveCategory();
	$_SESSION['result'] =$result;
    header('Location: action.php?page=add-category');
}
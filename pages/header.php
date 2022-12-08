<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="assets/css/my-styles.css" rel="stylesheet"/>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/css/fontawesome-all.css" rel="stylesheet"/>

</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
      <a href="#" class="navbar-brand"><img src="assets/img/logo/Independent_Television_Logo.svg.png" height="50"></a>
      <ul class="navbar-nav">
        <li><a href="action.php?page=home" class="nav-link">Home</a></li>
        <li class="dropdown">
          <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">All Category</a>
          <ul class="dropdown-menu">

            <?php foreach($categories as $category) { ?>
              <li>
                <a href="action.php?page=category-blog&&category-id=<?php echo $category['id']; ?>"

                 class="dropdown-item"><?php echo $category['category_name']; ?></a>
               </li>
            <?php } ?>
            
          </ul>
        </li>
        <li><a href="action.php?page=add-category" class="nav-link">Add Category</a></li>
        <li><a href="action.php?page=manage-category" class="nav-link">Manage Category</a></li>
        <li><a href="action.php?page=add-blog" class="nav-link">Add Blog</a></li>
        <li><a href="action.php?page=manage-blog" class="nav-link">Manage Blog</a></li>
        <li><a href="action.php?page=login" class="nav-link">Login</a></li>
        <li><a href="action.php?page=logout" class="nav-link">Logout</a></li>
      </ul>
    </div>
  </nav>
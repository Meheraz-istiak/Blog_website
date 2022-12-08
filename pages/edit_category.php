<?php include 'pages/header.php'; ?>

<section class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-9 mx-auto">
        
        <div class="card">
          <div class="card-header">Edit Category</div>
          <div class="card-body">
            <h4 class="text-center text-success">
              <?php 
                if(isset($_SESSION['result'])) {
                  echo $_SESSION['result'];
                  $_SESSION['result'] = '';
                }
              ?>
            </h4>
            <form action="action.php" method="POST" enctype="multipart/form-data">
            	<input type="text" name="update_id"value="<?php echo $singlecategories['id'];?>">
              <div class="row mb-3">
                <label for="" class="col-md-3">Category Name<span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="category_name" value="<?php echo $singlecategories['category_name'];?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-md-3"></label>
                <div class="col-md-9 text-center">
                  <input type="submit" class="btn btn-outline-success btn-sm" name="updateCategory" value="Update category">
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include 'pages/footer.php'; ?>


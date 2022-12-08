<?php include 'pages/header.php'; ?>

<section class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-9 mx-auto">
        
        <div class="card">
          <div class="card-header">Add Blog Form</div>
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

              <div class="row mb-3">
                <label for="" class="col-md-3">Location<span class="text-danger">*</span></label>
                 <div class="col-md-9">
	                  <select class="form-select form-select-sm col-md-3" name="category_id" aria-label=".form-select-sm example">
					  <option selected>Open this select menu</option>
					  <?php foreach($categories as $category) { ?>
					  <option value="<?php echo $category['id']; ?>">

					  	<?php echo $category['category_name']; ?>

					   </option>
					   <?php } ?>
					</select>
			     </div>
              </div>
              

              <div class="row mb-3">
                <label for="" class="col-md-3">Blog Title <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="title" placeholder="Blog Title..." required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-md-3">Location<span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="location" placeholder="Author Info..." required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-md-3">Blog Description <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <textarea rows="5" class="form-control" name="description" placeholder="Blog Description..." required></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-md-3">Image <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event, 'image-show')">
                  <p class="text-center mt-3">
                    <img src="assets/img/no-photo.jpg" id="image-show" alt="" class="img-thumbnail" width="150px">
                  </p>
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-md-3"></label>
                <div class="col-md-9 text-center">
                  <input type="submit" class="btn btn-outline-success btn-sm" name="saveBlog" value="Create a New Blog">
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


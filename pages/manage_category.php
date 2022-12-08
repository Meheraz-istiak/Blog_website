<?php include 'pages/header.php'; ?>

<section class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="card">
          <div class="card-header">Manage All Blogs</div>
          <div class="card-body">
            <h4 class="text-center text-success">
              <?php 
                if(isset($_SESSION['result'])) {
                  echo $_SESSION['result'];
                  $_SESSION['result'] = '';
                }
              ?>
            </h4>
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Sl. No</th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($categories as $key => $value) { ?>
                  <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $value['category_name']; ?></td>
                    <td>
                      <a href="action.php?page=edit&&id=<?php echo $value['id'];?>"
                       class="btn btn-success btn-sm" title="Edit">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="action.php?page=delete&&id=<?php echo $value['id'];?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure want to delete this blog?')">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'pages/footer.php'; ?>
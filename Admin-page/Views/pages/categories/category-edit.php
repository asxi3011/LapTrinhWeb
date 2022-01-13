
<?php include "Views/partials/navbar.php"; ?>
<?php include "Views/partials/sidebar.php"; ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sửa danh mục</h4>
                  <form class="forms-sample" action="index.php?controller=postcategory&action=handler" method="POST" enctype="multipart/form-data">
                    <input type="text" name="actionCate" class="d-none" value="update">
                    <div class="form-group">
                      <label for="">ID Danh Mục</label>
                      <input readonly="readonly" retype="text" name="id" class="form-control" value="<?= $data["find"]["bc_id"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="">Tên Danh Mục</label>
                      <input type="text" name="bc_name" class="form-control" value="<?= $data["find"]["bc_name"] ?>">
                    </div>
                    
                    <a href="index.php?controller=postcategory" class="btn btn-secondary me-2 text-dark">Hủy</a>
                    <button type="submit" class="btn btn-primary me-2 text-light">Lưu thay đổi</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->





  <!-- partial -->
</div>


<?php include "Views/partials/footer.php"; ?>

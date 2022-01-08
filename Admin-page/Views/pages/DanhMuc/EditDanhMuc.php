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
                  <form class="forms-sample" action="index.php?controller=productcategory&action=handler" method="POST" enctype="multipart/form-data">
                    <input type="text" name="actionCate" class="d-none" value="update">
                    <div class="form-group">
                      <label for="">ID Danh Mục</label>
                      <input readonly="readonly" retype="text" name="id" class="form-control" value="<?= $data["find"]["pc_id"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="">Tên Danh Mục</label>
                      <input type="text" name="pc_name" class="form-control" value="<?= $data["find"]["pc_name"] ?>">
                    </div>
                    <div class="form-group">
                      <label>Hình sản phẩm</label>
                      <input type="file" name="hinh" id="avatar_sanpham" class="form-control w-25">
                      <label class="my-3" for="avatar_sanpham"><?= $data["find"]["img"] ?></label>

                      <div class="">

                        <img class="img-preview" src="uploads/<?= $data["find"]["img"] ?>" alt="">
                      </div>
                    </div>
                    <a href="index.php?controller=productcategory" class="btn btn-secondary me-2 text-dark">Hủy</a>
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
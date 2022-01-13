
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
                  <h4 class="card-title">Sửa bài viết</h4>

                  <form class="forms-sample" action="index.php?controller=post&action=handleProduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="inputUser">Chọn danh mục</label>
                      <select id="slc_category" name="category" class="form-select" aria-label="Default select example">

                        <?php
                        foreach ($data["categorys"] as $category) :
                          if ($category["bc_id"] === $product["bc_id"]) { ?>
                            <option selected value="<?= $category["bc_id"] ?>"><?= $category["bc_name"] ?></option>'
                          <?php
                          } else { ?>
                            <option value="<?= $category["bc_id"] ?>"><?= $category["bc_name"] ?></option>


                        <?php  }
                        endforeach; ?>
                      </select>
                    </div>
                    <input type="text" name="post_action" class="d-none" value="update">
                    <div class="form-group">
                      <label for="inputPWD">ID bài viết</label>
                      <input type="text" name="id" class="form-control" value="<?= $product["bn_id"] ?>" id="inputPWD" placeholder="Nhập ID sản phẩm" readonly>
                    </div>
                  
                    <div class="form-group">
                      <label for="inputPWD">Tên bài viết</label>
                      <input type="text" name="name" class="form-control" value="<?= $product["bn_title"] ?>" id="inputPWD" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Tác giả</label>
                      <input type="text" name="tacgia" class="form-control" value="<?= $product["tacgia"] ?>" id="inputName" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Ngày đăng</label>
                      <fieldset>
                          <input type="date" id="start" name="date_posted" value="<?= $product["date_posted"] ?>"min="2021-10-31">
                      </fieldset>
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Nội dung</label>
                      <div class="form-floating">
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                                <?= $product["bn_content"] ?>
                            </textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label>Hình ảnh</label>
                      <input type="file" name="hinh" id="avatar_sanpham" class="form-control w-25">
                      <label class="my-3" for="avatar_sanpham"><?= $product["bn_img"] ?></label>

                      <div class="">

                        <img class="img-preview" src="uploads/<?= $product["bn_img"] ?>" alt="">
                      </div>
                    </div>
                    <a href="javascript:history.back()" class="btn btn-secondary me-2 text-dark">Hủy</a>
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
</div>
</div>

<?php include "Views/partials/footer.php"; ?>



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
                  <h4 class="card-title">Sửa sản phẩm</h4>

                  <form class="forms-sample" action="index.php?controller=product&action=handleProduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="inputUser">Chọn danh mục</label>
                      <select id="slc_category" name="category" class="form-select" aria-label="Default select example">

                        <?php
                        foreach ($data["categorys"] as $category) :
                          if ($category["pc_id"] === $product["pc_id"]) { ?>
                            <option selected value="<?= $category["pc_id"] ?>"><?= $category["pc_name"] ?></option>'
                          <?php
                          } else { ?>
                            <option value="<?= $category["pc_id"] ?>"><?= $category["pc_name"] ?></option>


                        <?php  }
                        endforeach; ?>
                      </select>
                    </div>
                    <input type="text" name="product_action" class="d-none" value="update">

                    <div class="form-group">
                      <label for="inputPWD">ID sản phẩm</label>
                      <input type="text" name="id" class="form-control" value="<?= $product["product_id"] ?>" id="inputPWD" placeholder="Nhập ID sản phẩm" readonly>
                    </div>

                    <div class="form-group">
                      <label for="inputPWD">Tên sản phẩm</label>
                      <input type="text" name="name" class="form-control" value="<?= $product["product_name"] ?>" id="inputPWD" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Giá sản phẩm</label>
                      <input type="text" name="price" class="form-control" value="<?= $product["product_price"] ?>" id="inputName" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Tồn kho</label>
                      <input type="text" class="form-control" value="<?= $product["quantity"] ?>" id="inputAddress" placeholder="Nhập Thương hiệu">
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Mô tả</label>
                      <div class="form-floating">
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                                <?= $product["product_description"] ?>
                            </textarea>

                      </div>
                    </div>
                    <div class="form-group">
                      <label>Hình sản phẩm</label>
                      <input type="file" name="hinh" id="avatar_sanpham" class="form-control w-25">
                      <label class="my-3" for="avatar_sanpham"><?= $product["product_img"] ?></label>

                      <div class="">

                        <img class="img-preview" src="uploads/<?= $product["product_img"] ?>" alt="">
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
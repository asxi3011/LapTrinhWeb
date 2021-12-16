<?php include "../../partials/navbar.php"; ?>
    <?php include "../../partials/sidebar.php"; ?>

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
                  <h4 class="card-title">Thêm sản phẩm</h4>
                  <form class="forms-sample" action="taonguoidung.php" method="POST">
                    <div class="form-group">
                      <label for="inputUser">Chọn danh mục</label>
                      <select class="form-select" aria-label="Default select example">
                        
                        <option value="1" selected>Sneaker</option>
                        <option value="2">Sang trọng</option>
                        <option value="3">Boots</option>
                        <option value="4">Chạy bộ</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                      <label for="inputPWD">ID sản phẩm</label>
                      <input type="text" name="pwd" class="form-control" value="sp001" id="inputPWD" placeholder="Nhập ID sản phẩm">
                    </div>

                    <div class="form-group">
                      <label for="inputPWD">Tên sản phẩm</label>
                      <input type="text" name="pwd" class="form-control" value="Yeezy 700" id="inputPWD" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Giá sản phẩm</label>
                      <input type="text" name="name" class="form-control" value="50.000 VND"  id="inputName" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Thương hiệu</label>
                      <input type="text" name="address" class="form-control" value="Adilinh" id="inputAddress" placeholder="Nhập Thương hiệu">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Tồn kho</label>
                      <input type="text" name="address" class="form-control" value="30" id="inputAddress" placeholder="Nhập Thương hiệu">
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Mô tả</label>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">Mẫu giày Adidas Yeezy Boost 700 là mẫu thứ 5 được Kanye West tạo ra cho thương hiệu của mình. Đó là vào năm 2015, câu chuyện bắt đầu, rapper / nhà sản xuất hợp tác với Adidas để tạo ra thương hiệu của mình và phát hành các mẫu giày thể thao của riêng mình.
                    </textarea>
                       
                        </div>
                    </div>
                    <div class="form-group">
                      <label >Hình sản phẩm</label>
                      <input type="file" name="file" id="avatar_sanpham" class="form-control w-25" >
                      <label class="my-3" for="avatar_sanpham">yeezy700.jpg</label>
                   
                      <div class="">
                        
                          <img class="img-preview" src="http://hystore.vn/wp-content/uploads/2019/11/BDEC2A51-A04B-40EB-84CD-82D4C7C52E98.jpeg" alt="">
                      </div>
                    </div>
                    <a href="DanhSachSanPham.php" class="btn btn-secondary me-2 text-dark">Hủy</a>
                    <button type="button" class="btn btn-primary me-2 text-light">Lưu thay đổi</button>
                   
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
   
      <?php include "../../partials/footer.php"; ?>

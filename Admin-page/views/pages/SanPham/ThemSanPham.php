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
                        <option selected hidden>Chọn danh mục</option>
                        <option value="1">Sneaker</option>
                        <option value="2">Sang trọng</option>
                        <option value="3">Boots</option>
                        <option value="4">Chạy bộ</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                      <label for="inputPWD">ID sản phẩm</label>
                      <input type="text" name="pwd" class="form-control" id="inputPWD" placeholder="Nhập ID sản phẩm">
                    </div>

                    <div class="form-group">
                      <label for="inputPWD">Tên sản phẩm</label>
                      <input type="text" name="pwd" class="form-control" id="inputPWD" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Giá sản phẩm</label>
                      <input type="text" name="name" class="form-control" id="inputName" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Thương hiệu</label>
                      <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Nhập Thương hiệu">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Tồn kho</label>
                      <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Nhập Thương hiệu">
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Mô tả</label>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        
                        </div>
                    </div>
                    <div class="form-group">
                      <label >Hình sản phẩm</label>
                      <input type="file" name="file" class="form-control w-25" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2 text-light">Thêm sản phẩm</button>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   

  
      <?php include "../../partials/footer.php"; ?>

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
                  <h4 class="card-title">Thêm người dùng</h4>
                  <form class="forms-sample" action="taonguoidung.php" method="POST">
                    <div class="form-group">
                      <label for="inputUser">Tài khoản</label>
                      <input type="text" name="user" class="form-control" id="inputUser" placeholder="Username">
                    </div>
                   
                    <div class="form-group">
                      <label for="inputPWD">Mật khẩu</label>
                      <input type="password" name="pwd" class="form-control" id="inputPWD" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="inputCFPWD">Nhập lại mật khẩu</label>
                      <input type="password" name="cfpwd" class="form-control" id="inputCFPWD" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Họ Tên</label>
                      <input type="text" name="name" class="form-control" id="inputName" placeholder="Họ Tên">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Địa chỉ</label>
                      <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Nhập Địa chỉ">
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Số điện thoại</label>
                      <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                      <label >Hình đại diện</label>
                      <input type="file" name="file" class="form-control w-25" >
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Đồng ý với các điều khoản
                      </label>
                    </div>
                    <button type="button" class="btn btn-primary me-2 text-light">Đăng kí</button>
                   
                  </form>
                </div>
              </div>
            </div>
                  
          </div>
        </div>
        <!-- content-wrapper ends -->
         



        <!-- partial -->
      </div>
 
      <?php include "../../partials/footer.php"; ?>
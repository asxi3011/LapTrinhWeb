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
                  <h4 class="card-title">Thêm người dùng</h4>
                  <form class="forms-sample" action="index.php?controller=user&action=handleUser" method="POST" enctype="multipart/form-data">
                  <input type="text" name="user_action" value="add" class="form-control" hidden>
                    <div class="form-group">
                      <label for="inputUser">Email</label>
                      <input type="email" name="email" class="form-control" id="inputAccount" placeholder="Nhập email">
                    </div>
                   
                    <div class="form-group">
                      <label for="inputPWD">Mật khẩu</label>
                      <input type="password" name="password" class="form-control" id="inputPWD" placeholder="Nhập password">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Họ Tên</label>
                      <input type="text" name="user_name" class="form-control" id="inputName" placeholder="Nhập họ tên">
                    </div>
                    <input type="submit" class="btn btn-primary me-2 text-light" value="Thêm người dùng">
                  </form>
                </div>
              </div>
            </div>
                  
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial -->
      </div>
 
      <?php include "Views/partials/footer.php"; ?>
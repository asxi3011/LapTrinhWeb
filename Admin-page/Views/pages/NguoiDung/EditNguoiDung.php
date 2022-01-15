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
                  <h4 class="card-title">Sửa người dùng</h4>
                  <form class="forms-sample" action="index.php?controller=user&action=handleUser" method="POST">
                  <input type="text" name="user_action" class="d-none" value="update">
                  <div class="form-group">
                      <label for="inputPWD">ID sản phẩm</label>
                      <input type="text" name="id" class="form-control" value="<?= $data["find"]["user_id"] ?>" id="inputPWD" placeholder="Nhập ID người dùng" readonly>
                    </div>
                    
                  <div class="form-group">
                      <label for="inputUser">Email</label>
                      <input type="email" name="email" class="form-control" value="<?= $data["find"]["email"] ?>"vaid="inputAccount" placeholder="Nhập email">
                    </div>
                   
                    <div class="form-group">
                      <label for="inputPWD">Mật khẩu</label>
                      <input type="password" name="password" class="form-control" value="<?= $data["find"]["password"] ?>"id="inputPWD" placeholder="Nhập password">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Họ Tên</label>
                      <input type="text" name="user_name" class="form-control" value="<?= $data["find"]["user_name"] ?>"id="inputName" placeholder="Nhập họ tên">
                    </div>
                    <input type="submit" class="btn btn-primary me-2 text-light" value="Sửa thông tin">
                   
                  </form>
                </div>
              </div>
            </div>
                  </div>
              </div>
        <!-- content-wrapper ends -->
         
     
      </div>
 
      <?php include "Views/partials/footer.php"; ?>
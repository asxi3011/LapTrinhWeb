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
                  <h4 class="card-title">Sửa người dùng</h4>
                  <form class="forms-sample" action="taonguoidung.php" method="POST">
                    <div class="form-group">
                      <label for="inputUser">Tài khoản</label>
                      <input type="text" name="user" class="form-control" value="admin" id="inputUser" placeholder="Username">
                    </div>
                   
                    <div class="form-group">
                      <label for="inputPWD">Mật khẩu</label>
                      <input type="password" name="pwd" class="form-control" value="1234" id="inputPWD" placeholder="Password">
                    </div>

                    
                    <div class="form-group">
                      <label for="inputName">Họ Tên</label>
                      <input type="text" name="name" class="form-control" value="Say Dậu" id="inputName" placeholder="Họ Tên">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Địa chỉ</label>
                      <input type="text" name="address" class="form-control" value="1200 Việt Nam" id="inputAddress" placeholder="Nhập Địa chỉ">
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Số điện thoại</label>
                      <input type="text" name="phone" class="form-control" value="09090909" id="inputPhone" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                      <label >Hình đại diện</label>
                      <input type="file" name="file" id="avatar_user" class="form-control w-25" >
                      <label class="my-3" for="avatar_user">conmeo.jpg</label>
                   
                      <div class="">
                        
                          <img class="img-preview" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.6435-9/80569696_2579129398984180_5987193047803232256_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=e3f864&_nc_ohc=QXy24SSFYJgAX94WrQ9&_nc_ht=scontent.fsgn2-2.fna&oh=79acd6b511f7246b8756b14f2e196b86&oe=61B0A473" alt="">
                      </div>

                      
                    </div>
                    
                    <a href="DanhSachNguoiDung.php" class="btn btn-secondary me-2 text-dark">Hủy</a>
                    <button type="button" class="btn btn-success me-2 text-light">Lưu thay đổi</button>
                   
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
         
     
      </div>
 
      <?php include "../../partials/footer.php"; ?>
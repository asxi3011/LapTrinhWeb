<?php include "../../partials/navbar.php"; ?>
    <?php include "../../partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chi tiết người dùng</h4>
                  <a href="DanhSachNguoiDung.php" class="btn btn-sm btn-inverse-primary btn-fw mb-3">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-book-open-variant mx-2 fs-5"></i> Danh sách người dùng
                    </div>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-warning">
                      <thead>
                        <tr>
                          <th colspan="2">
                            Thông tin chi tiết 
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td> 
                                Hình ảnh
                             </td>
                          <td class="py-1">
                            <img src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.6435-9/80569696_2579129398984180_5987193047803232256_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=e3f864&_nc_ohc=QXy24SSFYJgAX94WrQ9&_nc_ht=scontent.fsgn2-2.fna&oh=79acd6b511f7246b8756b14f2e196b86&oe=61B0A473" />
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Họ tên
                             </td>
                          <td >
                             Say Dậu
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Trạng thái
                             </td>
                          <td >
                            <label class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                User
                             </td>
                          <td >
                            admin
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Mật khẩu
                             </td>
                          <td >
                             1234
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Địa chỉ 
                             </td>
                          <td >
                             1200 Việt Nam
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Số điện thoại
                             </td>
                          <td >
                             09090909
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Ngày tạo
                             </td>
                          <td >
                             November 9,2021
                          </td>
                        </tr>
                         
                      </tbody>
                    </table>
                    <div class="d-flex flex-row-reverse">
                        <a href="EditNguoiDung.php" class="btn btn-sm btn-inverse-success btn-fw mt-3 mx-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-pencil mx-2"></i> Sửa người dùng
                        </div>
                        </a>
                        <button  class="btn btn-sm btn-inverse-danger btn-fw mt-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-delete mx-2 fs-5"></i> Xóa người dùng
                        </div>
                        </button>
                    </div>
                   
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
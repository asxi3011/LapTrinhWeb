<?php include "../../partials/navbar.php"; ?>
    <?php include "../../partials/sidebar.php"; ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chi tiết danh mục</h4>
                  <a href="DanhSachDanhMuc.php" class="btn btn-sm btn-inverse-primary btn-fw mb-3">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-book-open-variant mx-2 fs-5"></i> Danh sách danh mục
                    </div>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-bordered table-warning">
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
                                ID Danh mục
                             </td>
                          <td >
                                ct001
                          </td>
                        </tr>
                        
                        <tr>
                            <td> 
                                Tên danh mục
                             </td>
                          <td >
                                Sneaker
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
                        <a href="EditDanhMuc.php" class="btn btn-sm btn-inverse-success btn-fw mt-3 mx-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-pencil mx-2"></i> Sửa danh mục
                        </div>
                        </a>
                        <a href="#" class="btn btn-sm btn-inverse-danger btn-fw mt-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-delete mx-2 fs-5"></i> Xóa danh mục
                        </div>
                        </a>
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
         
       


        <!-- partial -->
      </div>
      <?php include "../../partials/footer.php"; ?>
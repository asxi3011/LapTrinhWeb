<?php include "../../patials/navbar.php"; ?>
    <?php include "../../patials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chi tiết sản phẩm</h4>
                  <a href="DanhSachSanPham.php" class="btn btn-sm btn-inverse-primary btn-fw mb-3">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-book-open-variant mx-2 fs-5"></i> Danh sách sản phẩm
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
                            <img src="http://hystore.vn/wp-content/uploads/2019/11/BDEC2A51-A04B-40EB-84CD-82D4C7C52E98.jpeg" />
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Tên sản phẩm 
                             </td>
                          <td >
                                Yeezy 700
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
                                Giá
                             </td>
                          <td >
                            50.000 VND
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Thương hiệu
                             </td>
                          <td >
                             Adilinh
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Tồn kho
                             </td>
                          <td >
                             30
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Mô tả
                             </td>
                          <td >
                            Mẫu giày Adidas Yeezy Boost 700 là mẫu thứ 5 được Kanye West tạo ra cho thương hiệu của mình.</br>
                             Đó là vào năm 2015, câu chuyện bắt đầu, rapper / nhà sản xuất hợp tác với Adidas để tạo ra 
                             thương hiệu của mình và phát hành các mẫu giày thể thao của riêng mình.
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
                        <a href="EditSanPham.php" class="btn btn-sm btn-inverse-success btn-fw mt-3 mx-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-pencil mx-2"></i> Sửa sản phẩm
                        </div>
                        </a>
                        <button  class="btn btn-sm btn-inverse-danger btn-fw mt-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-delete mx-2 fs-5"></i> Xóa sản phẩm
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
         
        



        <!-- partial -->
      </div>
      <?php include "../../patials/footer.php"; ?>
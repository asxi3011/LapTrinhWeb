    <?php include "../../partials/navbar.php"; ?>
    <?php include '../../../data/data.php' ?>
    <?php include "../../partials/sidebar.php"; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="header-table">
                  <h4 class="card-title">Quản lý đơn hàng</h4>
                  <button href="./category-add.php" class="btn-add" onclick="window.location.href='./product-add.php'">Thêm đơn hàng</button>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          Hình ảnh
                        </th>
                        <th>
                          Mã đơn hàng
                        </th>
                        <th>
                          Tên đơn hàng
                        </th>
                        <th>
                          Số lượng
                        </th>
                        <th>
                          Giá ($)
                        </th>
                        <th>
                          Sửa
                        </th>
                        <th>
                          Xóa
                        </th>
                        <th>
                          Xem
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($dataProduct as $items) {
                        echo "<tr>";
                        foreach ($items as $key => $value) {
                          if ($key == "image") {
                            echo "<td class='py-1'>
                                      <img src='../../public/images/$value' />
                                    </td>";
                          } else {
                            echo "<td>$value</td>";
                          }
                        }
                        echo '
                                  <td>
                                    <a href="./product-edit.php" class="edit-icon">
                                        <i class="mdi mdi-tooltip-edit"></i>
                                    </a>
                                  </td>
                                  <td>
                                    <a href="#" class="edit-icon">
                                        <i class="mdi mdi-delete-forever"></i>
                                    </a>
                                  </td>
                                  <td>
                                  <a href="./prod-info.php" class="edit-icon">
                                      <i class="mdi mdi-account-search"></i>
                                  </a>
                                </td>
                                ';
                        echo "</tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.php -->
      <?php include "../../partials/footer.php"; ?>
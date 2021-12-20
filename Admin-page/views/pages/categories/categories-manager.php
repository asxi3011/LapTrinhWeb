
  
 <?php include "../../partials/navbar.php"; ?>
  <?php include "../../partials/sidebar.php"; ?>
  <?php include '../../../data/data.php'; ?>
  <!-- <?php include "../../../data/session.php";
    $categories = getCategories();
  ?>   -->
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-8 grid-margin stretch-card ml-32">
            <div class="card">
              <div class="card-body">
                <div class="header-table">
                  <h4 class="card-title">Quản lý danh mục</h4>
                  <button class="btn-add" onclick="window.location.href='../categories/category-add.php'">Thêm danh mục</button>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Danh mục</th>
                        <th>Số lượng</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                        <th>Xem</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($dataCategory as $items) {
                        echo "<tr>";
                        foreach ($items as $key => $value) {
                          echo "<td>$value</td>";
                        }
                        echo '
                                <td>
                                  <a href="./category-edit.php" class="edit-icon">
                                      <i class="mdi mdi-tooltip-edit"></i>
                                  </a>
                                </td>
                                <td>
                                  <a href="#" class="edit-icon">
                                      <i class="mdi mdi-delete-forever"></i>
                                  </a>
                                </td>
                                <td>
                                  <a href="./cate-info.php" class="edit-icon">
                                      <i class="mdi mdi-account-search"></i>
                                  </a>
                                </td>
                              ';
                        echo "</tr>";
                      }
                      ?>
                      <!-- <?php foreach ($categories as $item) { ?>
                        <tr>
                          <td>
                            <?php echo $item["category_id"]; ?>
                          </td>
                          <td>
                          <?php echo $item["category_quantity"]; ?>
                          </td>
                          <td>
                            <a href="./category-edit.php?id=<?php echo $item["category_id"]; ?>" class="edit-icon">
                                <i class="mdi mdi-tooltip-edit"></i>
                            </a>
                          </td>
                          <td>
                              <a href="#" class="edit-icon">
                                  <i class="mdi mdi-delete-forever"></i>
                              </a>
                          </td>
                          <td>
                          <a href="./cate-info.php" class="edit-icon">
                                      <i class="mdi mdi-account-search"></i>
                                  </a>
                          </td>
                        </tr>
                        <?php } ?> -->
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
      
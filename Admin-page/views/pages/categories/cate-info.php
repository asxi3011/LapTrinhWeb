<?php include "../../partialsnavbar.php"; ?>
    <?php include "../../partialssidebar.php"; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-8 grid-margin stretch-card ml-32">
            <div class="card">
              <div class="card-body">
                <div class="header-table">
                  <h4 class="card-title">Chi tiết danh mục</h4>
                  <button class="btn-add" onclick="window.location.href='./categories-manager.php'">Quay lại</button>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Header</th>
                        <th>Info</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Danh mục</td>
                        <td>
                          1
                        </td>
                      </tr>
                      <tr>
                        <td>Số lượng</td>
                        <td>
                          5
                        </td>
                      </tr>
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
      <?php include "../../partialsfooter.php"; ?>
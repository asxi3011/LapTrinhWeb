    <?php include "../../partials/navbar.php"; ?>
    <?php include "../../partials/sidebar.php"; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-8 grid-margin stretch-card ml-32">
            <div class="card">
              <div class="card-body">
                <div class="header-table">
                  <h4 class="card-title">Thêm sản phẩm</h4>
                  <button class="btn-add" onclick="window.location.href='./products-manager.php'">Thêm</button>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Header</th>
                        <th>Input</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Hình ảnh</td>
                        <td>
                          <input type="file" id="img-upload" name="img" accept="image/*">
                        </td>
                      </tr>
                      <tr>
                        <td>Mã sản phẩm</td>
                        <td>
                          <input type="number" placeholder="Nhập mã" name="id" required="required" class="td-input" type="number" min="1" step="1" value="1">
                        </td>
                      </tr>
                      <tr>
                        <td>Tên sản phẩm</td>
                        <td>
                          <input type="text" placeholder="Nhập tên" name="name" required="required" class="td-input">
                        </td>
                      </tr>
                      <tr>
                        <td>Số lượng</td>
                        <td>
                          <input type="number" placeholder="Nhập mã" name="id" required="required" class="td-input" type="number" min="1" step="1" value="1">
                        </td>
                      </tr>
                      <tr>
                        <td>Giá</td>
                        <td>
                          <input type="number" placeholder="Nhập mã" name="id" required="required" class="td-input" type="number" min="1" step="1" value="1">
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
      <?php include "../../partials/footer.php"; ?>
<?php include "Views/partials/navbar.php"; ?>
    <?php include "Views/partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chi tiết đơn hàng</h4>
                  <a href="index.php?controller=order" class="btn btn-sm btn-inverse-primary btn-fw mb-3">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-book-open-variant mx-2 fs-5"></i> Danh sách đơn hàng
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
                                Mã đơn hàng
                             </td>
                          <td class="py-1">
                              <?=$orders[0]["order_id_client"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Ngày đặt
                             </td>
                          <td class="py-1">
                          <?=$orders[0]["dateOrder"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                              Trạng thái
                             </td>
                          <td >
                          <label class="badge badge-warning"><?=$orders[0]["status"]?></label>
                    
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Tên khách hàng
                             </td>
                          <td >
                          <?php echo $orders[0]["id"]?>
                          <?=$orders[0]["cus_name"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Địa chỉ
                             </td>
                          <td >
                          <?=$orders[0]["address"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Email
                             </td>
                          <td >
                          <?=$orders[0]["email"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Phone
                             </td>
                          <td >
                          <?=$orders[0]["phone"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Giỏ hàng
                             </td>
                          <td>
                                <table class="table table-warning">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                            Tên sản phẩm
                                            </th>
                                            <th colspan="2">
                                            Số lượng
                                            </th>
                                            <th colspan="2">
                                            Đơn giá
                                            </th>
                                            <th colspan="2">
                                            Thành tiền
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data["orders"] as $order) : ?>
                                        <tr>
                                            <td colspan="2">
                                            <?=$order["product_name"]?>
                                            </td>
                                            <td colspan="2">
                                            <?=$order["product_qty"]?>
                                            </td>
                                            <td colspan="2">
                                            <?=$order["product_price"]?>
                                            </td>
                                            <td colspan="2">
                                            <?=$order["product_total"]?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>  
                                    </tbody>
                                    
                                </table>
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
          </div>
        </div>
        <!-- content-wrapper ends -->
         
        



        <!-- partial -->
      </div>
      <form name="frmDelete" method="post"></form>
        <!-- partial -->
      </div>
   <!-- Modal -->
      <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Bạn có thực sự muốn xóa ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger btn-delete">Xóa</button>
            </div>
          </div>
        </div>
      </div>
      <?php include "Views/partials/footer.php"; ?>

<script>
  document.addEventListener('DOMContentLoaded',function(){
  
    var test = document.getElementById('modalDelete');
    var frmDelete = document.forms["frmDelete"];
    test.addEventListener('show.bs.modal', function (event) {
         var button = event.relatedTarget;
        var recipient = button.getAttribute('data-bs-id');
        var btn_delete = document.querySelector(".btn-delete");
        btn_delete.onclick = function(){
          frmDelete.action = `index.php?controller=product&action=handleProduct&id=${recipient}`;
          frmDelete.submit();
        }
    })
  });
</script>



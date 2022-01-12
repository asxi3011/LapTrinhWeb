<?php include "Views/partials/navbar.php"; ?>
    <?php include "Views/partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách đơn hàng</h4>
                  
                  <div class="table-responsive mt-3">
                    <table id="table_ListProduct" class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Mã đơn hàng
                          </th>
                          <th>
                            Trạng thái
                          </th>
                          <th>
                            Tên người đặt
                          </th>
                          <th>
                              Địa chỉ
                          </th>
                          <th>
                            Ngày đặt
                          </th>
                          <th>
                              Tổng tiền
                          </th>
                          <th class="text-center">
                            Chức năng
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($data["orders"] as $order) : ?>
                        <tr>
                            <td>                            
                            <?=$order["id"]?>                        
                            </td>
                            <td>                            
                            <?=$order["order_id_client"]?>                        
                            </td>
                            <td class="color_status"><?=$order["status"]?></td>
                            <td>
                             <?=$order["cus_name"]?>
                          </td>
                          <td>
                           <?=$order["address"]?>
                          </td>
                          <td>
                           <?=$order["dateOrder"]?>
                          </td>
                          <td>
                          <?=$order["total"]?>
                          </td>
                          <td class="text-center action_order">
                            <?php
                                if($order["status"]=='pending'){
                                  echo "<button class='btn btn-sm btn-rounded btn-inverse-danger' mx-1 data-bs-toggle='modal' data-bs-target='#modalDelete' data-bs-id='$order[id]'>"; 
                                  echo '<i class="mdi mdi-window-close"></i>';
                                  echo '</button>';
                                }
                            ?>
                            <a href="index.php?controller=order&action=detailOrder&id=<?=$order["id"]?>" class="btn btn-sm btn-rounded btn-inverse-warning  mx-1"> 
                              <i class="mdi mdi-book-open"></i>
                            </a>
                            <?php
                                if($order["status"]=='pending'){
                                  echo "<a href='index.php?controller=order&action=successOrder&id=$order[id]' class='btn btn-sm btn-rounded btn-inverse-success mx-1'>"; 
                                  echo '<i class="mdi mdi-check"></i>';
                                  echo '</a>';
                                }
                            ?>
                          </td>
                        </tr>
                        <?php endforeach; ?>  
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
         
       
        <form name="frmDelete" method="post"></form>
        <!-- partial -->
      </div>
   <!-- Modal -->
      <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hủy đơn hàng</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Bạn có thực sự muốn hủy đơn hàng ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
              <button type="button" class="btn btn-danger btn-delete">Xác nhận</button>
            </div>
          </div>
        </div>
      </div>
  <?php include "Views/partials/footer.php"; ?>

<script>
  
  document.addEventListener('DOMContentLoaded',function(){
    $('#table_ListProduct').DataTable();
    
    var test = document.getElementById('modalDelete');
    var frmDelete = document.forms["frmDelete"];
    var color_status = $(".color_status");
    color_status.each(function(index){
      if($(this).text() === 'pending'){
        $(this).addClass("text-warning");
      }else if($(this).text() === 'cancel'){
        $(this).addClass("text-danger");
      }else if($(this).text() === 'done'){
        $(this).addClass("text-success");
      }
    })


    test.addEventListener('show.bs.modal', function (event) {
         var button = event.relatedTarget;
        var recipient = button.getAttribute('data-bs-id');
        var btn_delete = document.querySelector(".btn-delete");
        btn_delete.onclick = function(){
          frmDelete.action = `index.php?controller=order&action=cancelOrder&id=${recipient}`;
          frmDelete.submit();
        }
    })
  });
</script>
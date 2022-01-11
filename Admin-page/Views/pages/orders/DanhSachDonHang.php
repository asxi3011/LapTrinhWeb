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
                            Mã đơn hàng
                          </th>
                          <th>
                            Tên người đặt
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
                      <?php //foreach($data["products"] as $product) : ?>
                        <tr>
                            <td>                            
                            <?//=$product["product_id"]?>                        
                            </td>
                          <td class="py-1">
                            <img src="../Clientpage/public/img/<?//=$product["product_img"]?>" alt="">
                          
                          </td>
                          
                          <td>
                           <?//=$product["product_name"]?>
                          </td>
                          <td>
                            345.000VND
                          </td>
                          <td class="text-center ">
                            <a href="index.php?controller=product&action=editProduct&id=<?//=$product["product_id"]?>" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 
                            <a href="index.php?controller=product&action=detailProduct&id=<?//=$product["product_id"]?>" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
                            </a>
                            <button class="btn btn-sm btn-rounded btn-inverse-danger mx-1" data-bs-toggle="modal" data-bs-target="#modalDelete" data-bs-id="<?//=$product["product_id"]?>"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>
                        <?php //endforeach; ?>  
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
    $('#table_ListProduct').DataTable();
    
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
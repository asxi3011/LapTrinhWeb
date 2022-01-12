<?php include "Views/partials/navbar.php"; ?>
    <?php include "Views/partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chi tiết sản phẩm</h4>
                  <a href="index.php?controller=product" class="btn btn-sm btn-inverse-primary btn-fw mb-3">
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
                                Danh mục
                             </td>
                          <td class="py-1">
                              <?=$product[0]["pc_name"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Hình ảnh
                             </td>
                          <td class="py-1">
                            <img src="uploads/<?=$product[0]["product_img"]?>" />
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Tên sản phẩm 
                             </td>
                          <td >
                          <?=$product[0]["product_name"]?>
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
                          <?=$product[0]["product_price"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Tồn kho
                             </td>
                          <td >
                          <?=$product[0]["quantity"]?>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Mô tả
                             </td>
                          <td>
                            <textarea class="form-control"  style="height: 200px">
                              <?=$product[0]["product_description"]?>
                            </textarea>
                          </td>
                        </tr> 
                      </tbody>
                    </table>
                    <div class="d-flex flex-row-reverse">
                        <a href="index.php?controller=product&action=editProduct&id=<?=$product[0]["product_id"]?>" class="btn btn-sm btn-inverse-success btn-fw mt-3 mx-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-pencil mx-2"></i> Sửa sản phẩm
                        </div>
                        </a>
                        <button class="btn btn-sm btn-inverse-danger btn-fw mt-3" data-bs-toggle="modal" data-bs-target="#modalDelete" data-bs-id="<?=$product[0]["product_id"]?>">
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



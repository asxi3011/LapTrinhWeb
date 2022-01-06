<?php include "Views/partials/navbar.php"; ?>
    <?php include "Views/partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách danh mục</h4>
                  <a href="index.php?controller=productcategory&action=add" class="btn btn-sm btn-inverse-success btn-fw">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-cube mx-2 fs-5"></i> Thêm mới
                    </div>
                  </a>
                  <div class="table-responsive mt-3">
                    <table id="table_ListProduct" class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            id
                          </th>
                          <th class="text-center">
                            Tên Danh mục
                          </th>
                          <th class="text-center">
                            Chức năng
                          </th>
                        </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($data["allPC"] as $pc) : ?>
                        <tr>
                          <td>
                          <?=$pc["pc_id"]?>
                          </td>
                          <td class="text-center">
                        
                          <?=$pc["pc_name"]?>
                            
                          </td>
                          
                          <td class="text-center ">
                            <a class="btn btn-sm btn-rounded btn-inverse-primary mx-1" href="index.php?controller=productcategory&action=edit&id=<?= $pc["pc_id"] ?>"> 
                                   <i class="mdi mdi-pencil"> </i>
                            </a> 

                
                            <button class="btn btn-sm btn-rounded btn-inverse-danger mx-1" data-bs-toggle="modal" data-bs-target="#modalDelete" data-bs-id="<?=$pc["pc_id"]?>"> 
                                  <i class="mdi mdi-delete text-danger" ></i>
                            </button>
                       
                          </td>
                        </tr>
                        <?php endforeach ?>
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
    $('#table_ListProduct').DataTable();
    
    var test = document.getElementById('modalDelete');
    var frmDelete = document.forms["frmDelete"];

    test.addEventListener('show.bs.modal', function (event) {
         var button = event.relatedTarget;
        var recipient = button.getAttribute('data-bs-id');
        var btn_delete = document.querySelector(".btn-delete");
        btn_delete.onclick = function(){
          frmDelete.action = `index.php?controller=productcategory&action=handler&id=${recipient}`;
          frmDelete.submit();
        }
    })
  });
      </script>
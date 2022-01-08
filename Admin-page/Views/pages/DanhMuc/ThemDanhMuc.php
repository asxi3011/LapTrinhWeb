<?php include "Views/partials/navbar.php"; ?>
    <?php include "Views/partials/sidebar.php"; ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Thêm danh mục</h4>
                  <form class="forms-sample" action="index.php?controller=productcategory&action=handler" method="POST" enctype="multipart/form-data">
                  <!--<div class="form-group"> 
                      <label for="inputUser">ID Danh Mục</label>
                      <input type="text" name="pc_id" class="form-control" id="id_category" placeholder="Nhập ID Danh mục">
                    </div>-->
                    <input type="text" name="actionCate" value="add" class="d-none">
                    <div class="form-group">
                      <label for="inputName">Tên Danh Mục</label>
                      <input type="text" name="pc_name" class="form-control" id="name_category" placeholder="Nhập tên danh mục">
                    </div>
                    <div class="form-group">
                      <label >Hình sản phẩm</label>
                      <input type="file" name="hinh" class="form-control w-25" required >
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2 text-light">Thêm</button>
                   
                  </form>
                </div>
              </div>
            </div>
                
         
          </div>
        </div>
      
      </div>

  
      <?php include "Views/partials/footer.php"; ?>

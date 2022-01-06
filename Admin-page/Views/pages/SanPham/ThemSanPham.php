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
                  <h4 class="card-title">Thêm sản phẩm</h4>
                  <form class="forms-sample" action="index.php?controller=product&action=handleProduct" method="POST" enctype="multipart/form-data">
                  <input type="text" name="product_action" value="add" class="form-control" hidden>
                    <div class="form-group">
                      <label for="inputUser">Chọn danh mục</label>
                      <select name="category" class="form-select" aria-label="Default select example">
                        <option selected hidden>Chọn danh mục</option>
                        <?php
                            foreach($data["categorys"] as $category) :
                              ?>
                            <option value="<?=$category["pc_id"]?>"><?=$category["pc_name"]?></option>
                        <?php endforeach; ?>  
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="inputPWD">Tên sản phẩm</label>
                      <input type="text" name="name" class="form-control" id="inputPWD" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Giá sản phẩm</label>
                      <input type="text" name="price" class="form-control" id="inputName" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Mô tả</label>
                      <div class="form-floating">
                        <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <div></div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label >Hình sản phẩm</label>
                      <input type="file" name="hinh" class="form-control w-25" >
                    </div>
                    
                    <input type="submit" class="btn btn-primary me-2 text-light" value="Thêm sản phẩm">
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   

  
  <?php include "Views/partials/footer.php"; ?>
 
<script>
  document.addEventListener('DOMContentLoaded', function(){
    $('#trumbowyg-demo').trumbowyg();
  })
</script>
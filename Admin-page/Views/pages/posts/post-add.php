
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
                  <h4 class="card-title">Thêm bài viết</h4>
                  <form class="forms-sample" action="index.php?controller=post&action=handleProduct" method="POST" enctype="multipart/form-data">
                  <input type="text" name="post_action" value="add" class="form-control" hidden>
                    <div class="form-group">
                      <label for="inputUser">Chọn danh mục</label>
                      <select name="category" class="form-select" aria-label="Default select example">
                        <option selected hidden>Chọn danh mục</option>
                        <?php
                            foreach($data["categorys"] as $category) :
                              ?>
                            <option value="<?=$category["bc_id"]?>"><?=$category["bc_name"]?></option>
                        <?php endforeach; ?>  
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="inputPWD">Tên bài viết</label>
                      <input type="text" name="name" class="form-control" id="inputPWD" placeholder="Nhập tên sản phẩm">
                    </div>
                
                    <div class="form-group">
                      <label for="inputPhone">Nội dung</label>
                      <div class="form-floating">
                        <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <div></div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPWD">Tác giả</label>
                      <input type="text" name="tacgia" class="form-control" id="inputPWD" placeholder="Nhập tên tác giả">
                    </div>
                    <div class="form-group">
                      <label for="inputPWD">Ngày đăng</label>
                      <fieldset>
                          <input type="date" id="start" name="date_posted" value="<?= date("d-M-Y") ?>"min="2021-10-31">
                      </fieldset>
                    </div>

                    <div class="form-group">
                      <label >Hình ảnh</label>
                      <input type="file" name="hinh" class="form-control w-25" >
                    </div>

                    
                    <input type="submit" class="btn btn-primary me-2 text-light" value="Thêm bài viết">
                   
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

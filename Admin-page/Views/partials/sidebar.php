
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Quản lý</li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="../categories/categories-manager.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Danh mục bài viết</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../posts/posts-manager.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Quản lý bài viết</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../products/products-manager.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Quản lý đơn hàng</span>
            </a>
          </li> -->

          <li class="nav-item nav-category">Người dùng</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-nguoidung" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account-multiple-outline"></i>
              <span class="menu-title">Quản lý người dùng</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-nguoidung">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="?controller=user">Danh sách người dùng</a></li>
                <li class="nav-item"> <a class="nav-link" href="?controller=user&action=addUser">Thêm người dùng</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Danh mục</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-DanhMuc" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-cube"></i>
              <span class="menu-title">Quản lý danh mục</span>
              <i class="menu-arrow"></i> 
            </a>
            
           <div class="collapse" id="ui-DanhMuc">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="?controller=productcategory">Danh sách danh mục</a></li>
                <li class="nav-item"> <a class="nav-link" href="?controller=productcategory&action=add">Thêm danh mục</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Danh mục bài viết</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-DanhMuc" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-cube"></i>
              <span class="menu-title">Quản lý danh mục bài viết</span>
              <i class="menu-arrow"></i> 
            </a>
            
           <div class="collapse" id="ui-DanhMuc">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="?controller=postcategory">Danh sách danh mục</a></li>
                <li class="nav-item"> <a class="nav-link" href="?controller=postcategory&action=add">Thêm danh mục</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category"> Bài viết</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-DanhMuc" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-cube"></i>
              <span class="menu-title">Quản lý bài viết</span>
              <i class="menu-arrow"></i> 
            </a>
            
           <div class="collapse" id="ui-DanhMuc">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="?controller=post">Danh sách bài viét</a></li>
                <li class="nav-item"> <a class="nav-link" href="?controller=post&action=addblog">Thêm bài viết</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Sản phẩm</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-sanPham" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Quản lý sản phẩm</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-sanPham">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="?controller=product">Danh sách sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" href="?controller=product&action=addProduct">Thêm sản phẩm</a></li>
              
              </ul>
            </div>
          </li>
        </ul>

      </nav>
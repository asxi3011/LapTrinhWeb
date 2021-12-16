# Hướng dẫn code
>File đã được thiết lập theo mô hình MVC vui long2tuan6 thủ nguyên tắc

- Folder Controller: Nơi xử lý chức năng.
 >Viết chức năng gì command chức năng đó
 >Không có đặt tên biến xàm.Đặt tên đúng nghĩa. vd: var a, var b.

- FolderModel : Nơi định nghĩa các model 
    
- FolderViews : Nơi viết các trang giao diện
 1. Folder pages: Các trang giao diện được viết ở đây .
  >CHỈ TẠO FOLDER LIÊN QUAN ĐẾN GIỆN. CÁC TRANG CSS,JS,IMG KÈM THEO VUI LÒNG ĐỂ Ở FOLDER PUBLIC.

 2. Folder Partials: Các trang sử dụng MasterPage. Có khả năng tái sử dụng lại nhiều lần. Vui lòng để ở đây
  >CHỈ THÊM VÀO KHÔNG CẦN CHIA FOLDER 

  3. Folder PUBLIC: Các trang css,js,img,.. viết ở đây.
  > Nếu có viết thêm css ở một trang (html,php) mới . Thì vui lòng tạo với một css mới. Hạn chế viết chung ở file app.css 
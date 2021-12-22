# Hướng dẫn code
> :warning: File đã được thiết lập theo mô hình MVC vui lòng tuân thủ nguyên tắc :warning:
- Folder Controller: Nơi xử lý chức năng. :white_check_mark:
 >Viết chức năng gì comment lại luồng chạy chức năng đó
 >Không có đặt tên biến xàm.Đặt tên đúng nghĩa. vd: var a, var b. :x:
- FolderModel : Nơi định nghĩa các model. :white_check_mark:
    
- FolderViews : Nơi viết các trang giao diện. :white_check_mark:

 a.    :point_right: Views/Folder pages: Các trang giao diện được viết ở đây .
  >CHỈ TẠO FOLDER LIÊN QUAN ĐẾN GIỆN. CÁC TRANG CSS,JS,IMG KÈM THEO VUI LÒNG ĐỂ Ở FOLDER PUBLIC. :hot_face:
 b.    :point_right: Folder Partials: Các trang sử dụng MasterPage. Có khả năng tái sử dụng lại nhiều lần. Vui lòng để ở đây
  >CHỈ THÊM VÀO KHÔNG CẦN CHIA FOLDER  :hot_face:
 c.    :point_right: Folder PUBLIC: Các trang css,js,img,.. viết ở đây.
  > Nếu có viết thêm css ở một trang (html,php) mới . Thì vui lòng tạo với một css mới. Hạn chế viết chung ở file app.css  :hot_face:

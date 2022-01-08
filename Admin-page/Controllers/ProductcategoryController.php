
<?php

class ProductCategoryController extends BaseController
{
    private $PCModel, $ProductModel, $BlogModel;

    public function __construct()
    {
        $this->PCModel = $this->loadModel("ProductCategoryModel");
        $this->PCModel = new ProductCategoryModel;
        $this->ProductModel = $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;
    }

    public function index()
    {
        $allPC = $this->PCModel->getData();
        $this->view("pages.DanhMuc.DanhSachDanhMuc", [
            "allPC" => $allPC

        ]);
    }
    public function add()
    {

        $this->view("pages.DanhMuc.ThemDanhMuc", []);
    }
    public function edit()
    {
        $pc_id = $_GET["id"];
        $find = $this->PCModel->findById($pc_id);
        $this->view("pages.DanhMuc.EditDanhMuc", [
            "find" => $find
        ]);
    }
    public function handler()
    {
        $target_dir = "uploads/";
        $uploadOk = 1;
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["hinh"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        $action = isset($_POST["actionCate"]) ? $_POST["actionCate"] : "delete";
        switch ($action) {
            case "add":
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $data = [
                    "pc_name" => $_POST["pc_name"],
                    "img" => $_FILES["hinh"]["name"],
                ];
                $this->PCModel->insertCategory($data);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                header("Location:index.php?controller=productcategory&action=index");
                break;
            case "update":
                if ($_FILES['hinh']['size'] != 0) {

                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $id = $_POST["id"];
                    $data = [
                        "pc_name" => $_POST["pc_name"],
                        "img" => $_FILES["hinh"]["name"],
                    ];
                    $this->PCModel->updateCategory($id, $data);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    
                } else {

                    $id = $_POST["id"];
                    $data = [
                        "pc_name" => $_POST["pc_name"],
                    ];
                    $this->PCModel->updateCategory($id, $data);

                    
                }
                header("Location:index.php?controller=productcategory");
                break;
            case "delete":
                $id = $_GET["id"];
                $this->PCModel->deleteCategory($id);
                header("Location:index.php?controller=productcategory&action=index");
                break;
            default:
                break;
        }
    }
    public function productCategoryDetail()
    {

        $productOfCategory = $this->ProductModel->getData();

        return $this->view("pages.SanPham.DanhSachSanPham", [
            "productOfCategory" => $productOfCategory,
        ]);
    }
}


<?php

class PostCategoryController extends BaseController
{
    private $PCModel, $ProductModel, $BlogModel;

    public function __construct()
    {
        $this->PCModel = $this->loadModel("ProductCategoryModel");
        $this->PCModel = new ProductCategoryModel;
        $this->ProductModel = $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;
        $this->BlogModel = $this->loadModel("PostCategoryModel");
        $this->BlogModel = new PostCategoryModel;

    }

    public function index()
    {
        $allPC = $this->BlogModel->getData();
        $this->view("pages.categories.categories-manager", [
            "allPC" => $allPC

        ]);
    }
    public function add()
    {

        $this->view("pages.categories.category-add", []);
    }
    public function edit()
    {
        $pc_id = $_GET["id"];
        $find = $this->BlogModel->findById($pc_id);
        $this->view("pages.categories.category-edit", [
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
              
                $data = [
                    "bc_name" => $_POST["bc_name"]
                   
                ];
                $this->BlogModel->insertpostCategory($data);
              
                header("Location:index.php?controller=postcategory&action=index");
                break;
            case "update":
               
                    $id = $_POST["id"];
                    $data = [
                        "bc_name" => $_POST["bc_name"],
                       
                    ];
                    $this->BlogModel->updatepostCategory($id, $data);                     
                    header("Location:index.php?controller=postcategory");
                    break;
            case "delete":
                $id = $_GET["id"];
                $this->BlogModel->deletepostCategory($id);
                header("Location:index.php?controller=postcategory");
                break;
            default:
                break;
        }
    }
    
}

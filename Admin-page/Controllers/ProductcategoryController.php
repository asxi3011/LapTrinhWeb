
<?php

class ProductCategoryController extends BaseController 
{
    private $PCModel, $ProductModel, $BlogModel;

    public function __construct()
    {
        $this->PCModel=$this->loadModel("ProductCategoryModel");
        $this->PCModel=new ProductCategoryModel;
        $this->ProductModel=$this->loadModel("ProductModel");
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
       
        $this->view("pages.DanhMuc.ThemDanhMuc", [
        ]);

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

        $action = isset($_POST["actionCate"]) ? $_POST["actionCate"] : "delete" ;
        switch($action){
            case "add":
                $data = [
                    "pc_name"=> $_POST["pc_name"],
                ];
                $this->PCModel->insertCategory($data);
                header("Location:index.php?controller=productcategory&action=index");
                break;
            case "update":
                $id = $_POST["id"];
                $data = [
                    "pc_name"=> $_POST["pc_name"],
                ];
                $this->PCModel->updateCategory($id,$data);                  
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
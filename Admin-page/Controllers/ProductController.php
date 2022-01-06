<?php

class ProductController extends BaseController 
{
    private $ProductModel;
    private $ProductCategoryModel;
    public function __construct()
    {
        $this->loadModel("ProductModel");
        $this->loadModel("ProductCategoryModel");
        $this->ProductModel = new ProductModel;
        $this->ProductCategoryModel = new ProductCategoryModel;

    }
    
    public function index()
    {
        $product = $this->ProductModel->getData();
        $this->view("pages/SanPham/DanhSachSanPham", [
            "products" => $product,
        ]);
    }

    public function productDetail() 
    {
        $product_id = $_GET["product_id"];

        $product = $this->ProductModel->findById($product_id);
        
        return $this->view("product-detail", [
            "product" => $product,
        ]);
    }
    public function addProduct() 
    { 

        $Categoryproduct = $this->ProductCategoryModel->getData();
        $this->view("pages/SanPham/ThemSanPham",[
            "categorys" => $Categoryproduct,
        ]);
    }
    public function editProduct() 
    {   
        $product_id = $_GET['id'];
        $Categoryproduct = $this->ProductCategoryModel->getData();
        $product = $this->ProductModel->findById($product_id);
        
        $this->view("pages/SanPham/EditSanPham",[
            "categorys" => $Categoryproduct,
            "product" =>$product,
        ]);
    }
    public function detailProduct(){
        $product_id = $_GET['id'];
        
        $product = $this->ProductModel->getProduct($product_id);
        $this->view("pages/SanPham/ChiTietSanPham",[
            "product" =>$product,
        ]);
    }
    public function handleProduct() 
    {
        $target_dir = "uploads/";
        $action = isset($_POST["product_action"]) ? $_POST["product_action"] : "delete" ;
        $uploadOk = 1;
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["hinh"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo "File is not an image.";
              $uploadOk = 0;
            }
          }
        switch($action){
            case "add":
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $data = [
                    "pc_id"=> $_POST["category"],
                    "product_name"=> $_POST["name"],
                    "product_description"=> $_POST["description"],
                     "product_img"=> $_FILES["hinh"]["name"],
                     "product_price"=> $_POST["price"],
                ];
                $this->ProductModel->insertProduct($data);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                header("Location:index.php?controller=product&action=addProduct");
                break;
            case "update":
                if($_FILES['hinh']['size'] != 0){
                 
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $id = $_POST["id"];
                    $data = [
                        "pc_id"=> $_POST["category"],
                        "product_name"=> $_POST["name"],
                        "product_description"=> $_POST["description"],
                        "product_img"=> $_FILES["hinh"]["name"],
                        "product_price"=> $_POST["price"],
                   
                    ];
                    $this->ProductModel->updateProduct($id,$data);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    header("Location:index.php?controller=product");
                   
                }else{
                    $id = $_POST["id"];
                    $data = [
                        "pc_id"=> $_POST["category"],
                        "product_name"=> $_POST["name"],
                        "product_description"=> $_POST["description"],                    
                         "product_price"=> $_POST["price"],
                     
                    ];
                    $this->ProductModel->updateProduct($id,$data);                  
                    header("Location:index.php?controller=product");
                }
                break;
             
            
            case "delete":
                $id = $_GET["id"];  
                $this->ProductModel->deleteProduct($id);
                header("Location:index.php?controller=product");
                break;
            default:
                break;
        }
       
        
    }


}
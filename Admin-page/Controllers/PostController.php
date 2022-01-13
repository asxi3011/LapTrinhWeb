<?php

class PostController extends BaseController 
{
    private $PostModel;
    private $PostCategoryModel;

    
    public function __construct()
    {
        $this->loadModel("PostModel");
        $this->loadModel("PostCategoryModel");
        $this->PostModel = new PostModel;
        $this->PostCategoryModel = new PostCategoryModel;

    }
    
    public function index()
    {
        $blog = $this->PostModel->getData();
        $this->view("pages/posts/posts-manager", [
            "blogs" => $blog,
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
    public function addblog() 
    { 

        $Categoryproduct = $this->PostCategoryModel->getData();
        $this->view("pages/posts/post-add",[
            "categorys" => $Categoryproduct,
        ]);
    }
    public function editPost() 
    {   
        $bc_id = $_GET['id'];
        $Categoryproduct = $this->PostCategoryModel->getData();
        $product = $this->PostModel->findById($bc_id);
        
        $this->view("pages/posts/post-edit",[
            "categorys" => $Categoryproduct,
            "product" =>$product,
        ]);
    }
    public function detailPost(){
        $bn_id = $_GET['id'];
        
        $post = $this->PostModel->getPost($bn_id);
        $this->view("pages/posts/post-info",[
            "post" =>$post,
        ]);
    }
    public function handleProduct() 
    {
        $target_dir = "uploads/";
        $action = isset($_POST["post_action"]) ? $_POST["post_action"] : "delete" ;
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
                    "bc_id"=> $_POST["category"],
                    "bn_title"=> $_POST["name"],
                    "bn_content"=> $_POST["description"],
                     "bn_img"=> $_FILES["hinh"]["name"],
                     "tacgia"=> $_POST["tacgia"],
                     "date_posted"=> $_POST["date_posted"],
                ];
                $this->PostModel->insertPost($data);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                header("Location:index.php?controller=post&action=index");
                break;
            case "update":
                if($_FILES['hinh']['size'] != 0){
                 
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $id = $_POST["id"];
                    $data = [
                        "bc_id"=> $_POST["category"],
                        "bn_title"=> $_POST["name"],
                        "bn_content"=> $_POST["description"],
                        "bn_img"=> $_FILES["hinh"]["name"],
                        "tacgia"=> $_POST["tacgia"],
                        "date_posted"=> $_POST["date_posted"],
                   
                    ];
                    $this->PostModel->updatePost($id,$data);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    header("Location:index.php?controller=post");
                   
                }else{
                    $id = $_POST["id"];
                    $data = [
                        "bc_id"=> $_POST["category"],
                        "bn_title"=> $_POST["name"],
                        "bn_content"=> $_POST["description"],
                        "tacgia"=> $_POST["tacgia"],
                        "date_posted"=> $_POST["date_posted"],
                     
                    ];
                    $this->PostModel->updatePost($id,$data);                  
                    header("Location:index.php?controller=post");
                }
                break;
             
            
            case "delete":
                $id = $_GET["id"];  
                $this->PostModel->deletePost($id);
                header("Location:index.php?controller=post");
                break;
            default:
                break;
        }
       
        
    }


}
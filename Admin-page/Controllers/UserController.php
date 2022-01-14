<?php

class UserController extends BaseController 
{
    private $UserModel;
    public function __construct()
    {
        $this->loadModel("UserModel");
        $this->UserModel = new UserModel;

    }
    
    public function index()
    {
        $user = $this->UserModel->getData();
        $this->view("pages/NguoiDung/DanhSachNguoiDung", [
            "users" => $user,
        ]);
    }

    public function addUser() 
    { 

        
        $this->view("pages/NguoiDung/ThemNguoiDung");
    }
    public function editUser() 
    {   
        $user_id = $_GET['id'];
        $find = $this->UserModel->findById($user_id);
        
        $this->view("pages/NguoiDung/EditNguoiDung",[
            "find" =>$find,
        ]);
    }
    public function handleUser() 
    {
        $action = isset($_POST["user_action"]) ? $_POST["user_action"] : "delete" ;
        switch($action){
            case "add":
                $data = [
                    "email"=> $_POST["email"],
                    "password"=> $_POST["password"],
                    "user_name"=> $_POST["user_name"],
                ];
                $this->UserModel->insertUser($data);
                header("Location:index.php?controller=user&action=index");
                break;
            case "update":
                    $id = $_POST["id"];
                    $data = [
                        "email"=> $_POST["email"],
                    "password"=> $_POST["password"],
                    "user_name"=> $_POST["user_name"],
                     
                    ];
                    $this->UserModel->updateUser($id,$data);                  
                    header("Location:index.php?controller=user");
                break;
             
            
            case "delete":
                $id = $_GET["id"];  
                $this->UserModel->deleteUser($id);
                header("Location:index.php?controller=user");
                break;
            default:
                break;
        }
       
        
    }


}
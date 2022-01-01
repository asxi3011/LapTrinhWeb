<?php

class ProductController extends BaseController 
{
    private $ProductModel, $session;

    public function __construct()
    {
        $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;

        require "Helper/Session.php";
        $this->session = new Session;
    }

    public function index()
    {
        
        $this->view("product", [

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

    public function addToCart()
    {
        $product_id = $_GET["product_id"];

        $arr = $this->ProductModel->getDataByIds([$product_id]);

        $order = [];
        foreach($arr as $item) {
            $order = $item;
        }
        $this->view("shopping-cart", [
            "cart" => $order,
        ]);
    }

    public function delete()
    {
        $product_id = $_GET["product_id"] ?? null;
        $delete = $this->session->session_delete($_SESSION["cart"][$product_id]);
        $this->view("shopping-cart", [
            $delete
        ]);
        // return $productdel;
        // header("Location: index.php?controller=product&action=shopping");
    }
} 
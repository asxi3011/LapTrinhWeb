<?php

class ProductController extends BaseController 
{
    private $ProductModel, $session;

    public function __construct()
    {
        $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;

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

    

} 
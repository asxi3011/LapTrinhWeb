<?php

class ProductController extends BaseController 
{
    private $ProductModel;

    public function __construct()
    {
        $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;

    }

    public function index() 
    {
        $allProduct = $this->ProductModel->getData();

        return $this->view("product-detail", [
            "allProduct" => $allProduct,
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
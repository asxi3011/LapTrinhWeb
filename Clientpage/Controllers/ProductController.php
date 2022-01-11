<?php

class ProductController extends BaseController
{
    private $ProductModel, $cartModel;

    public function __construct()
    {
        $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;

        $this->loadModel('CartModel');
        $this->cartModel = new CartModel;
    }

    public function index()
    {
        $total = $this->cartModel->getTotal();

        $this->view("product", [
            "total" => $total,

        ]);
    }

    public function productDetail()
    {
        $product_id = $_GET["product_id"];

        $product = $this->ProductModel->findById($product_id);
        $total = $this->cartModel->getTotal();

        return $this->view("product-detail", [
            "product" => $product,
            "total" => $total,
        ]);
    }
}

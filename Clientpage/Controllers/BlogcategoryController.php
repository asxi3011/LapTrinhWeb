<?php

class BlogcategoryController extends BaseController
{
    private $BCModel;

    public function __construct()
    {
        $this->loadModel("BlogcategoryModel");
        $this->BCModel = new BlogcategoryModel;

        $this->loadModel('CartModel');
        $this->cartModel = new CartModel;
    }

    public function categoryShow()
    {
    }

    public function blogDetail()
    {
        $bn_id = $_GET["bn_id"];

        $total = $this->cartModel->getTotal();
        $blog = $this->BCModel->findById($bn_id);

        return $this->view("blog-detail", [
            "total" => $total,
            "blog" => $blog,
        ]);
    }
}

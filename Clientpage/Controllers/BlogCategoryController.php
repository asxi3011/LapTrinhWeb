<?php

class BlogcategoryController extends BaseController
{
    private $BCModel;

    public function __construct()
    {
        $this->loadModel("BlogcategoryModel");
        $this->BCModel = new BlogcategoryModel;
    }

    public function categoryShow()
    {
    }

    public function blogDetail()
    {
        $bn_id = $_GET["bn_id"];

        $blog = $this->BCModel->findById($bn_id);

        return $this->view("blog-detail", [
            "blog" => $blog,
        ]);
    }
}

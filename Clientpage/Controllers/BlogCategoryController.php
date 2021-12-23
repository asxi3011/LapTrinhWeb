<?php

class BlogCategoryController extends BaseController 
{
    private $BCModel;

    public function __construct()
    {
        $this->loadModel("BlogCategoryModel");
        $this->BCModel = new BlogCategoryModel;

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
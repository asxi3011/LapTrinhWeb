<?php

class BlogController extends BaseController 
{
    private $BlogModel, $BCModel;

    public function __construct()
    {
        $this->loadModel("BlogModel");
        $this->BlogModel = new BlogModel;

        $this->loadModel("BlogCategoryModel");
        $this->BCModel = new BlogCategoryModel;
    }

    public function index()
    {
        $bc_id = $_GET["bc_id"] ?? null;

        $allBC = $this->BCModel->getData();

        if($bc_id != null) {
            $blogByBC = $this->BlogModel->getDataByPCId($bc_id);
        }else {
            $blogByBC = $this->BlogModel->getData();
        }

        $this->view("blog", [
            "allBC" => $allBC,
            "blogByBC" => $blogByBC,
        ]);
    }

    public function blogDetail() 
    {
        $bn_id = $_GET["bn_id"];
        $author_id = $_GET["author_id"];

        $blog = $this->BlogModel->findById($bn_id);

        $author = $this->BlogModel->joinAuthor($author_id);
        
        return $this->view("blog-details", [
            "blog" => $blog,
            "author" => $author,
        ]);
    }

}
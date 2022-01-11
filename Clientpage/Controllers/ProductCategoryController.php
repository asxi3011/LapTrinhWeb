<?php

class ProductcategoryController extends BaseController
{
    private $PCModel, $ProductModel, $BlogModel;

    public function __construct()
    {
        $this->loadModel("ProductcategoryModel");
        $this->PCModel = new ProductcategoryModel;

        $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;

        $this->loadModel("BlogModel");
        $this->BlogModel = new BlogModel;

        $this->loadModel('CartModel');
        $this->cartModel = new CartModel;
    }

    public function index()
    {

        $allProduct = $this->ProductModel->getData();

        $allPC = $this->PCModel->getData();

        $allblog = $this->BlogModel->getDataForIndex();
        $countItems = $this->cartModel->getCountItems();
        $total = $this->cartModel->getTotal();

        $this->view("index", [
            "allPC" => $allPC,
            "allProduct" => $allProduct,
            "allblog" => $allblog,
            "countItems" => $countItems,
            "total" => $total,

        ]);
    }

    public function productShow()
    {
        $pc_id = $_GET["pc_id"] ?? "1";
        $productByPC = $this->ProductModel->getDataByPCId($pc_id);
        $total = $this->cartModel->getTotal();

        $allPC = $this->PCModel->getData();

        $this->view("product", [
            "allPC" => $allPC,
            "total" => $total,
            "productByPC" => $productByPC,
            "total" => $total,

        ]);
    }

    public function ProductcategoryDetail()
    {
        $pc_id = $_GET["pc_id"];

        $pc = $this->PCModel->findById($pc_id);

        $productOfCategory = $this->ProductModel->getDataByPCId($pc_id);

        return $this->view("product-category-detail", [
            "pc" => $pc,
            "productOfCategory" => $productOfCategory,
        ]);
    }

    public function searchCategory()
    {
        $category = $_POST["category"];

        $pc = $this->PCModel->searchByNameId($category);

        $this->view("category-search", [
            "category" => $pc,
            "keyword" => $category
        ]);
    }
}

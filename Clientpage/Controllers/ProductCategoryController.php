
<?php

class ProductCategoryController extends BaseController 
{
    private $PCModel, $ProductModel, $BlogModel;

    public function __construct()
    {
        $this->loadModel("ProductCategoryModel");
        $this->PCModel = new ProductCategoryModel;

        $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;

        $this->loadModel("BlogModel");
        $this->BlogModel = new BlogModel;
    }


    public function index() 
    {
       
        $allProduct = $this->ProductModel->getData();

        $allPC = $this->PCModel->getData();

        $allblog = $this->BlogModel->getDataForIndex();

        $this->view("index", [
            "allPC" => $allPC,
            "allProduct" => $allProduct,
            "allblog" => $allblog,
        ]);

    }

    public function productShow()
    {
        $pc_id = $_GET["pc_id"] ?? "1";
        $productByPC = $this->ProductModel->getDataByPCId($pc_id);

        $allPC = $this->PCModel->getData();

        
        
        $this->view("product", [
            "allPC" => $allPC,
            "productByPC" => $productByPC,
        ]);
    }

    public function productCategoryDetail() 
    {
        $pc_id = $_GET["pc_id"];

        $pc = $this->PCModel->findById($pc_id);

        $productOfCategory = $this->ProductModel->getDataByPCId($pc_id);
        
        return $this->view("product-category-detail", [
            "pc" => $pc,
            "productOfCategory" => $productOfCategory,
        ]);
    }


}
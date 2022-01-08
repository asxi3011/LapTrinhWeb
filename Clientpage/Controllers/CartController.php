<?php

class CartController extends BaseController
{

    private $cartModel, $ProductModel;

    public function __construct()
    {
        $this->loadModel('CartModel');
        $this->cartModel = new CartModel;

        $this->loadModel("ProductModel");
        $this->ProductModel = new ProductModel;
    }

    public function cart()
    {

        if (isset($_POST["add"])) {
            $id = $_POST["idAdd"];
            $this->addToCart($id);
        }

        if (isset($_POST["update"])) {
            $id = $_POST["idUpdate"];
            $qty = $_POST["qty"];
            $this->updateQty($id, $qty);
        }

        if (isset($_POST["remove"])) {
            $id = $_POST["idRemove"];
            $this->deleteOne($id);
        }

        if (isset($_POST["empty"])) {
            $this->destroy();
        }

        $allItems = $this->cartModel->getAllItem();
        $this->view('shopping-cart', [
            "allItems" => $allItems
        ]);
    }

    public function addToCart($id)
    {
        $product = $this->ProductModel->findById($id);

        return $this->cartModel->addItem($product["product_id"], [
            "name" => $product["product_name"],
            "image" => $product["product_img"],
            "price" => $product["product_price"],
        ]);
    }

    public function updateQty($id, $qty)
    {

        $product = $this->ProductModel->findById($id);

        $options = [
            "name" => $product["product_name"],
            "image" => $product["product_img"],
            "price" => $product["product_price"],
        ];
        return $this->cartModel->updateCart($id, $qty, $options);
    }



    public function deleteOne($id)
    {
        return $this->cartModel->delete($id);
    }

    public function destroy()
    {
        $this->cartModel->deleteAll();
    }
}

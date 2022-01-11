<?php

class CartController extends BaseController
{

    private $cartModel, $productModel, $orderModel, $orderDetailModel;

    public function __construct()
    {
        $this->loadModel('CartModel');
        $this->cartModel = new CartModel;

        $this->loadModel("productModel");
        $this->productModel = new productModel;

        $this->loadModel("OrderModel");
        $this->orderModel = new OrderModel;

        $this->loadModel("OrderDetailModel");
        $this->orderDetailModel = new OrderDetailModel;
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

        $countItems = $this->cartModel->getCountItems();
        $allItems = $this->cartModel->getAllItem();
        $total = $this->cartModel->getTotal();
        $this->view('shopping-cart', [
            "allItems" => $allItems,
            "countItems" => $countItems,
            "total" => $total,
        ]);
    }

    public function addToCart($id)
    {
        $product = $this->productModel->findById($id);

        return $this->cartModel->addItem($product["product_id"], [
            "name" => $product["product_name"],
            "image" => $product["product_img"],
            "price" => $product["product_price"],
        ]);
    }

    public function updateQty($id, $qty)
    {

        $product = $this->productModel->findById($id);

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

    public function checkout()
    {
        if (isset($_POST["checkout"])) {
            $order = $this->cartModel->getAllItem();
            $total = $_POST["total"];
        }
        $this->view("checkout", [
            "order" => $order,
            "total" => $total,
        ]);
    }

    public function generateString($length)
    {
        $key = "";
        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        for ($i = 0; $i < $length; $i++)
            $key .= $charset[(mt_rand(0, (strlen($charset) - 1)))];

        return $key;
    }

    public function placeOrder()
    {
        if (isset($_POST['placeOrder'])) {
            $order_id = $this->generateString(10);
            $order_test = $order_id;
            $cus_name = $_POST['cus_name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $notes = $_POST['notes'];
            $total = $_POST['total'];
            $this->orderModel->insertOrder($order_test, $cus_name, $address, $email, $phone, $total, $notes);
            $deta = $this->orderModel->findByIDClient($order_test);
            $orderDetail = $this->cartModel->getAllItem();
            $id_order_selected = ($deta[0]["id"]);

            $arr = array();
            foreach ($orderDetail as $id => $items) {
                foreach ($items as $item) {
                    array_push($arr, [
                        "product_name" => $item["attributes"]["name"],
                        "product_qty" =>  $item["quantity"],
                        "product_price" => $item["attributes"]["price"],
                        "product_total" => ($item["attributes"]["price"] *  $item["quantity"]),
                    ]);
                }
            }
            foreach ($arr as $id => $item) {
                $this->orderDetailModel->insertOrderDetail($id_order_selected, $item["product_name"], $item["product_qty"],  $item["product_price"], $item["product_total"]);
            }

            echo ("Đặt hàng thành công");
            $this->cartModel->deleteAll();
        }
    }
}

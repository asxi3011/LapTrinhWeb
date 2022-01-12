<?php

class OrderController extends BaseController 
{
    private $OrderModel;
  
    public function __construct()
    {
        $this->loadModel("OrderModel");
        $this->OrderModel = new OrderModel;
    }
    
    public function index()
    {
        $order = $this->OrderModel->getData();
        $this->view("pages/orders/DanhSachDonHang", [
           "orders" => $order,
        ]);
    }
    public function detailOrder(){
        $order_id = $_GET['id'];
        $order = $this->OrderModel->getOrder($order_id);
    
        $this->view("pages/orders/ChiTietDonHang",[
            "orders" =>$order,
        ]);
    }
    public function successOrder() 
    {
        $id = $_GET["id"];
        $data = [
            "status"=> "done",
        ];
        $this->OrderModel->updateOrder($id,$data);                  
        header("Location:index.php?controller=order");        
    }
    public function cancelOrder() 
    {
        $id = $_GET["id"];
        $data = [
            "status"=> "cancel",
        ];
        $this->OrderModel->updateOrder($id,$data);                  
        header("Location:index.php?controller=order");        
    }


}
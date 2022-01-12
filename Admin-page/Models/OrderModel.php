<?php 

class OrderModel extends BaseModel
{

    private $table = "orders";

    public function getData() {
        return $this->selectData($this->table);
    }

    public function findById($id) 
    {
        return $this->find($this->table, "product_", $id);
    }

    public function getDataByPCId($pc_id)
    {
        return $this->selectData($this->table, ["*"], [], "pc_id = ${pc_id}");
        
    }
    public function insertProduct($data) 
    {
        return $this->insert($this->table, $data);
    }
    public function updateOrder($id,$data)
    {
        return $this->update($this->table,$data,"id=${id}");
    }
    public function deleteProduct($id) 
    {
        return $this->delete($this->table,"product_id=${id}");
    }
    public function getOrder($id){
        $sql = "SELECT * FROM orders JOIN order_detail ON orders.id = order_detail.order_id  WHERE orders.id =${id}";
        return $this->getSQL($sql);
    }
}
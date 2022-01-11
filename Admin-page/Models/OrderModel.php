<?php 

class OrderModel extends BaseModel
{

    private $table = "order";

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
    public function updateProduct($id,$data)
    {
        return $this->update($this->table,$data,"product_id=${id}");
    }
    public function deleteProduct($id) 
    {
        return $this->delete($this->table,"product_id=${id}");
    }
    public function getProduct($id){
        $sql = "SELECT * FROM product LEFT JOIN product_category ON product.pc_id = product_category.pc_id  WHERE product_id =${id}";
        
        return $this->getSQL($sql);
    }
}
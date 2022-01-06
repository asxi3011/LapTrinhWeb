<?php 

class ProductCategoryModel extends BaseModel
{
  
    // const TABLE = "product_category";
    private $table = "product_category";

    public function getData() {
        return $this->selectData($this->table);
    }

    public function findById($id) 
    {
        return $this->find($this->table, "pc_", $id);
    }
    public function insertCategory($data) 
    {
        return $this->insert($this->table, $data);
    }
    public function deleteCategory($id) 
    {
        return $this->delete($this->table,"pc_id=${id}");
    }
    public function updateCategory($id,$data)
    {       
        return $this->update($this->table,$data,"pc_id = ${id}");
    }
    public function list_category(){
        return $this->rowsCount($this->table);
    }

    

}
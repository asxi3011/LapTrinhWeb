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
}
<?php 

class ProductCategoryModel extends BaseModel
{

    private $table = "product_category";

    public function getData() {

        return $this->selectData($this->table);

    }

    public function findById($id) 
    {
        return $this->find($this->table, "pc_", $id);
    }

    public function searchByNameId($category)
    {
        return $this->searchByName($this->table, "product", "pc_id", "pc_name",  $category);
    }
}
<?php 

class ProductCategoryModel extends BaseModel
{

    const TABLE = "product_category";

    public function getData() {

        return $this->selectData(self::TABLE);

    }

    public function findById($id) 
    {
        return $this->find(self::TABLE, "pc_", $id);
    }
}
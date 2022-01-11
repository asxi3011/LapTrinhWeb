<?php

class ProductModel extends BaseModel
{

    const TABLE = "product";

    public function getData()
    {

        return $this->selectData(self::TABLE);
    }

    public function findById($id)
    {
        return $this->find(self::TABLE, "product_", $id);
    }

    public function getDataByPCId($pc_id)
    {
        return $this->selectData(self::TABLE, ["*"], [], "pc_id = ${pc_id}");
    }

    public function getDataByIds(array $product_ids)
    {
        return $this->getProducts($product_ids);
    }
}

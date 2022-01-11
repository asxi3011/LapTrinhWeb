<?php 

class BlogCategoryModel extends BaseModel
{

    const TABLE = "blog_category";

    public function getData() {

        return $this->selectData(self::TABLE);

    }

    public function findById($id) 
    {
        return $this->find(self::TABLE, "bc_", $id);
    }

    public function getDataByPCId($pc_id)
    {
        return $this->selectData(self::TABLE, ["*"], [], "bc_id = ${pc_id}");
        
    }
}
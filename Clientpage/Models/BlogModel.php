<?php 

class BlogModel extends BaseModel
{

    const TABLE = "blog_news";

    public function getData() {

        return $this->selectData(self::TABLE);

    }

    public function findById($id) 
    {
        return $this->find(self::TABLE, "bn_", $id);
    }

    public function getDataByPCId($bc_id)
    {
        return $this->selectData(self::TABLE, ["*"], [], "bc_id = ${bc_id}");
        
    }

    public function joinAuthor($author_id)
    {
        return $this->getAuthor($author_id);
    }

    public function getDataForIndex()
    {
        return $this->selectData(self::TABLE, ["*"], ["date_posted" => "date_posted", "asc" => "asc"], "1", 3);
    }
}
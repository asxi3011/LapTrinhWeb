<?php 

class PostModel extends BaseModel
{

    private $table = "blog_news";

    public function getData() {

        return $this->selectData($this->table);

    }

    public function findById($id) 
    {
        return $this->find($this->table, "bn_", $id);
    }

    public function getDataByPCId($pc_id)
    {
        return $this->selectData($this->table, ["*"], [], "bc_id = ${bc_id}");
        
    }
    public function insertPost($data) 
    {
        return $this->insert($this->table, $data);
    }
    public function updatePost($id,$data)
    {
        return $this->update($this->table,$data,"bn_id=${id}");
    }
    public function deletePost($id) 
    {
        return $this->delete($this->table,"bn_id=${id}");
    }
    public function getPost($id){
        $sql = "SELECT * FROM blog_news LEFT JOIN blog_category ON blog_news.bc_id = blog_category.bc_id  WHERE bn_id =${id}";
        
        return $this->getSQL($sql);
    }
}
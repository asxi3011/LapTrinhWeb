<?php 

class PostCategoryModel extends BaseModel
{
  
    // const TABLE = "product_category";
    private $table = "blog_category";

    public function getData() {
        return $this->selectData($this->table);
    }

    public function findById($id) 
    {
        return $this->find($this->table, "bc_", $id);
    }
    public function insertpostCategory($data) 
    {
        return $this->insert($this->table, $data);
    }
    public function deletepostCategory($id) 
    {
        return $this->delete($this->table,"bc_id =${id}");
    }
    public function updatepostCategory($id,$data)
    {       
        return $this->update($this->table,$data,"bc_id = ${id}");
    }
    public function list_category(){
        return $this->rowsCount($this->table);
    }

    

}
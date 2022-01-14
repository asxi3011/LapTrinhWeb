<?php 

class UserModel extends BaseModel
{

    private $table = "user";

    public function getData() {

        return $this->selectData($this->table);

    }

    public function findById($id) 
    {
        return $this->find($this->table, "user_", $id);
    }
    public function insertUser($data) 
    {
        return $this->insert($this->table, $data);
    }
    public function updateUser($id,$data)
    {
        return $this->update($this->table,$data,"user_id=${id}");
    }
    public function deleteUser($id) 
    {
        return $this->delete($this->table,"user_id=${id}");
    }
    public function list_category(){
        return $this->rowsCount($this->table);
    }

}
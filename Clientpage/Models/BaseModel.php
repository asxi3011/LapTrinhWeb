<?php

class BaseModel extends Database
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->Connect();
    }

    // Get all data as column name
    public function selectData($table, $select = ['*'], $orderBys = [], $where = "1")
    {

        $columns = implode(',', $select);

        $orderByString = implode(' ', $orderBys);

        if($orderByString) {
            $sql = "SELECT ${columns} from ${table} WHERE ${where} ORDER BY ${orderByString}";
        }else{
            $sql = "SELECT ${columns} from ${table} WHERE ${where}";
        }

        //Tạo Prepared Statement
        $stmt = $this->conn->prepare($sql);

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        //Gán giá trị và thực thi
        $stmt->execute();

        // $data = [];
        // $data = $stmt->fetch();


        return $stmt->fetchAll();
        

        // return $data;
    }

    // Get 1 record of table
    public function find($table, $nameid, $id) {
        $sql = "SELECT * from ${table} Where ".$nameid."id = ${id} limit 1";

        //Tạo Prepared Statement
        $stmt = $this->conn->prepare($sql);

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        //Gán giá trị và thực thi
        $stmt->execute();

        $data = [];
        $data = $stmt->fetch();

        return $data;

    }
}


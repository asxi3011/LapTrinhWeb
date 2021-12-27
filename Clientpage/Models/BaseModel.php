<?php

class BaseModel extends Database
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->Connect();
    }

    // Get all data as column name
    public function selectData($table, $select = ['*'], $orderBys = [], $where = "1", $limit = 100)
    {

        $columns = implode(',', $select);

        $orderByString = implode(' ', $orderBys);

        if($orderByString) {
            $sql = "SELECT ${columns} from ${table} WHERE ${where} ORDER BY ${orderByString} LIMIT ${limit}";
        }else{
            $sql = "SELECT ${columns} from ${table} WHERE ${where} LIMIT ${limit}";
        }

        //Tạo Prepared Statement
        $stmt = $this->conn->prepare($sql);

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        //Gán giá trị và thực thi
        $stmt->execute();

        return $stmt->fetchAll();
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

    public function getAuthor($author_id)
    {
        $sql = "SELECT author_name, author_role, author_avatar FROM blog_news JOIN author ON blog_news.author_id = author.author_id WHERE blog_news.author_id = ${author_id}";
        
        //Tạo Prepared Statement
        $stmt = $this->conn->prepare($sql);

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        //Gán giá trị và thực thi
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getProducts(array $product_ids)
    {
        $ids = implode(',', $product_ids);
        $sql = "select * from product where product_id in ($ids)";

        //Tạo Prepared Statement
        $stmt = $this->conn->prepare($sql);

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        //Gán giá trị và thực thi
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

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
            $sql = "SELECT ${columns} from `${table}` WHERE ${where} ORDER BY ${orderByString} LIMIT ${limit}";
        }else{
            $sql = "SELECT ${columns} from `${table}` WHERE ${where} LIMIT ${limit}";
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

    public function getSQL($sql)
    {  
      
        //Tạo Prepared Statement
        $stmt = $this->conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //Gán giá trị và thực thi
        $stmt->execute();
        $data = $stmt->fetchAll();
    
        return $data;
    }

    public function insert($table, $data)
	{
		ksort($data);
		$fieldNames = implode('`, `', array_keys($data));
		$fieldValues = ':' . implode(', :', array_keys($data));
		$sql="INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)";
		$sth = $this->conn->prepare($sql);
		foreach ($data as $key => $value) {
			$sth->bindValue(":$key", $value);
		}  
        $sth->execute();
        
	}
   
	
	public function update($table, $data, $where)
	{
		ksort($data);
		
		$fieldDetails = NULL;
		foreach($data as $key=> $value) {
			$fieldDetails .= "`$key`=:$key,";
		}
		$fieldDetails = rtrim($fieldDetails, ',');
		
		$sth = $this->conn->prepare("UPDATE $table SET $fieldDetails WHERE $where");
		
		foreach ($data as $key => $value) {
			$sth->bindValue(":$key", $value);
		}
		
		$sth->execute();
	}


	
	public function delete($table, $where)
	{
        $sql="DELETE FROM $table WHERE $where";       
        $sth = $this->conn->prepare($sql);
		$sth->execute();
	}
	
	/* count rows*/
	public function rowsCount($table){
			$sth = $this->prepare("SELECT * FROM ".$table);
			$sth->execute();
			return $sth -> rowCount(); 
		}
	
	/* error check */
	private function handleError()
	{
		if ($this->errorCode() != '00000')
		{
			if ($this->_errorLog == true)
			//Log::write($this->_errorLog, "Error: " . implode(',', $this->errorInfo()));
			echo json_encode($this->errorInfo());
			throw new Exception("Error: " . implode(',', $this->errorInfo()));
		}
	}
    

}


<?php
class OrderModel extends BaseModel
{

    const TABLE = 'order';

    public function insertOrder($orderId, $cus_name, $address, $email, $phone, $total, $note)
    {
        return $this->insert(self::TABLE, $orderId, $cus_name, $address, $email, $phone, $total, $note);
    }

    public function findByIDClient($idClient)
    {
        $sql = "SELECT * from `order` where order_id_client = '${idClient}'";
        return $this->findOrder($sql);
    }
}

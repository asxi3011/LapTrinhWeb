<?php
class OrderModel extends BaseModel
{

    const TABLE = 'orders';

    public function insertOrder($orderId, $cus_name, $address, $email, $phone, $total, $note)
    {
        return $this->insert(self::TABLE, $orderId, $cus_name, $address, $email, $phone, $total, $note);
    }

    public function findByIDClient($idClient)
    {
        $sql = "SELECT * from `orders` where order_id_client = '${idClient}'";
        return $this->findOrder($sql);
    }
}

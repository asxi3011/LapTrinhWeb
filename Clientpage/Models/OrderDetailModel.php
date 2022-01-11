<?php
class OrderDetailModel extends BaseModel
{

    const TABLE = 'order_detail';

    public function insertOrderDetail($orderId, $product_name, $product_qty, $product_price, $product_total)
    {
        return $this->insertOrDetail(self::TABLE, $orderId, $product_name, $product_qty, $product_price, $product_total);
    }
}

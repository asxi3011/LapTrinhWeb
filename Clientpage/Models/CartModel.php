<?php

class CartModel extends BaseModel
{

    private $cart;
    public function __construct()
    {

        require "./Core/class.Cart.php";
        $this->cart = new Cart([
            // Maximum item can added to cart, 0 = Unlimited
            'cartMaxItem' => 0,

            // Maximum quantity of a item can be added to cart, 0 = Unlimited
            'itemMaxQuantity' => 0,

            // Do not use cookie, cart items will gone after browser closed
            'useCookie' => false,
        ]);
    }

    public function addItem($id, $option)
    {
        return $this->cart->add($id, 1, $option);
    }

    public function getAllItem()
    {
        return $this->cart->getItems();
    }


    public function deleteAll()
    {
        return $this->cart->clear();
    }

    public function deleteOne($id)
    {
        return $this->cart->remove($id);
    }

    public function updateCart($id, $qty, $options)
    {
        return $this->cart->update($id, $qty, $options);
    }

    public function getCountItems()
    {
        return $this->cart->getTotalItem();
    }

    public function getTotal()
    {
        return $this->cart->getAttributeTotal();
    }
}

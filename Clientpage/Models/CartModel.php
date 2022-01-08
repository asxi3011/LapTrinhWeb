<?php

class CartModel extends BaseModel
{

    private $cart;
    public function __construct()
    {

        require "./Core/class.Cart.php";
        $this->cart = new Cart();
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

    public function delete($id)
    {
        return $this->cart->remove($id);
    }

    public function updateCart($id, $qty, $options)
    {
        return $this->cart->update($id, $qty, $options);
    }
}

<?php

class Product {
    private $product_Id;
    private $quantity;

    
    public function __construct($product_Id, $quantity) {
        $this->product_Id = $product_Id;
        $this->quantity = $quantity;
    }
    
    public function set_product_Id($product_Id) {
        $this->product_Id = $product_Id;
    }

    public function set_quantity($quantity) {
        $this->quantity = $quantity;
    }

    public function get_product_Id()
    {
        return $this->product_Id;
    }
    
    public function get_quantity()
    {
        return $this->quantity;
    } 

    public function update_product($a_product)
    {
        $this->quantity += $a_product->get_quantity();
        return "Data Updated ";         
    }
}

?>

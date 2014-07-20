<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author lpc8
 */
class Product {
    
    private $product_id;
    
    private $product_quantity;
    
    function __construct($product_id, $product_quantity) {
        $this->product_id = $product_id;
        $this->product_quantity = $product_quantity;
    }

    public function get_product_id() {
        return $this->product_id;
    }

    public function get_product_quantity() {
        return $this->product_quantity;
    }
    
    public function set_product_quantity($product_quantity) {
        $this->product_quantity = $product_quantity;
    }




}

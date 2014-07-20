<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author OOP
 */
class Account {
    private $number;
    private $opening_date;
    private $balance;
    public function get_number() {
        return $this->number;
    }

    public function get_opening_date() {
        return $this->opening_date;
    }

    public function get_balance() {
        return $this->balance;
    }

        function __construct($number, $opening_date) {
        $this->number = $number;
        $this->opening_date = $opening_date;
    }
    
    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }

}

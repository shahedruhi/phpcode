<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author LAB
 */
class Account {
    
    private $account_number;
    private $opening_date;
    private $balance;
    
    
    public function deposit($amount)
    {
        $this->balance += $amount;
        return 'Deposited';
    }
    function __construct($account_number, $opening_date) {
        $this->account_number = $account_number;
        $this->opening_date = $opening_date;
        $this->balance = 0;
    }
    public function get_account_number() {
        return $this->account_number;
    }

    public function get_opening_date() {
        return $this->opening_date;
    }

    public function get_balance() {
        return $this->balance;
    }

        public function withdraw($amount)
    {
        if($this->balance - $amount >=0)
        {
            $this->balance -= $amount;
            return "withdrawn";
        }
        else {
            return "Insufficient Balance";
        }
    }
    //put your code here
}

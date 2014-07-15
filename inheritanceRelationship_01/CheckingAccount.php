<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CheckingAccount
 *
 * @author OOP
 */
class CheckingAccount extends Account{
    private $service_charge;
    public function get_service_charge() {
        return $this->service_charge;
    }

    public function set_service_charge($service_charge) {
        $this->service_charge = $service_charge;
    }


}

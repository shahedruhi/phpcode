<?php

/**
 * Description of savingsaccount
 *
 * @author OOP
 */
class SavingsAccount extends Account{
    private $interest_amount;
    public function get_interest_amount() {
        return $this->interest_amount;
    }

    public function set_interest_amount($interest_amount) {
        $this->interest_amount = $interest_amount;
    }


}

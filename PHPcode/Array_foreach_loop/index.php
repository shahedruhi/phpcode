<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'account.php';
        $account1 = new Account('10203', '10-05-14');
        $account1->deposit(3000);
        $account1->withdraw(300);
        
        $account2 = new Account('10203', '10-05-14');
        $account2->deposit(3000);
       
        
        $account3 = new Account('10203', '10-05-14');
        $account3->deposit(3000);
        $account3->withdraw(30000);
        
        $accounts = array();
        $accounts[]=$account1;
        $accounts[]=$account2;
        $accounts[]=$account3;
        
        foreach ($accounts as $an_account) {
            
            echo $an_account->get_account_number().' '.$an_account->get_opening_date().' '. $an_account->get_balance()."<br/>";
        }
        
        
        ?>
    </body>
</html>

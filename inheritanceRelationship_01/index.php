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
            require_once 'savingsaccount.php';
            require_once 'checkingaccount.php';
            $account = new Account('acc-001', '2013-10-10');
            $account->deposit(2000);
            
            $savings = new SavingsAccount('sv-001');
            
            $checking = new CheckingAccount();
            //$checking->
            //$savings->
        ?>
    </body>
</html>

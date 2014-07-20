<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer E-Account Info Entry</title>
    </head>
    <body>
        <form>
            <table border="1" style="width:300px">
            <tr>
            <td>Customer Name: </td>
            <td><input type = "text" name = 'customerNameText'> <br /></td>
            </tr>
            <tr>
            <td>Email Address:</td>
            <td><input type = "text" name = 'emailAddressText'> <br /></td>
            </tr>
            <tr>
            <td>Account Number:</td>
            <td><input type = "text" name = 'accountNumberText'> <br /></td>
            </tr>
            <tr>
            <td>Opening Date:</td>
            <td><input type = "text" name = 'openingDateText'> <br /></td>
            </tr>
            <tr>
            <td> </td>	
            <td><input type = "submit" value = "Create Account" name = 'createAccountButton'><br /></td>
            </tr>
            <tr>
            <td>Transaction: </td>	
            </tr>
            <tr>
            <td>Amount:</td>
            <td><input type = "text" name = 'amountText'> <br /></td>
            </tr>
            <tr>
            <td> </td>	
            <td><input type = "submit" value = "Deposit" name = 'depositButton'><br /></td>
            </tr>
            <tr>
            <td> </td>	
            <td><input type = "submit" value = "Withdraw" name = 'withdrawButton'><br /></td>
            </tr>
            <tr>
            <td> </td>	
            <td><input type = "submit" value = "Show Report" name = 'showreportButton'><br /></td>
            </tr>
            </table>	
        </form>	
        <?php
        
       
       require_once 'customer.php';
       require_once 'account.php';
               
       session_start();

       if (isset($_GET['createAccountButton']))
       {
        $account = new Account($_GET['accountNumberText'], $_GET['openingDateText']);
        
        $customer = new Customer();
        $customer->set_customer_name($_GET['customerNameText']);
        $customer->set_customer_email_address($_GET['emailAddressText']);
        $customer->set_customer_account($account);
        
        $_SESSION['a_customer'] = $customer;
        echo "Account Created";
       }

       if (isset($_GET['depositButton']))
       {
        $customer = $_SESSION['a_customer'];
        echo $customer->get_customer_account()->deposit($_GET['amountText'])."<br/>";
        $_SESSION['a_customer'] = $customer;
       }

       if (isset($_GET['withdrawButton']))
       {
        $customer = $_SESSION['a_customer'];
        echo $customer->get_customer_account()->withdraw($_GET['amountText'])."<br/>";
        $_SESSION['a_customer'] = $customer;         
       }

       if (isset($_GET['showreportButton']))
       {
        $customer = $_SESSION['a_customer'];
        echo "Customer Account No: ". $customer->get_customer_account()->get_account_number(). "<br/>";
        echo "Customer Name: ". $customer->get_customer_name(). "<br/>";
        echo "Opening Date: ". $customer->get_customer_account()->get_opening_date(). "<br/>";
        echo "Balance: ". $customer->get_customer_account()->get_balance(). "<br/>";
        }
        
        ?>
    </body>
</html>

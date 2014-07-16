<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <h2> Add/Update Product </h2>
    <body>
        <form method ="POST">
        <table border="1">
            <tr>
                <td>
                    Product Id : 
                </td>
                <td>
                    <input type ="text" name ="productIdText"><br/>
                </td>   
            </tr>
            <tr>
                <td>
                    Quantity : 
                </td>
                <td>
                    <input type ="text" name ="quantityText"><br/>
                </td>
            </tr>
            <tr>
                <td>
                </td>    
                <td>
                    <input type="submit" value ="Add/Update" name='add/update'>
                </td>   
            </tr>
            <tr>
                <td>
                    <a href="report.php">View Report</a> <br/>
                </td>
            </tr>             
        </table>          
        </form>
        <?php
         {
             require_once 'product.php';
             require_once 'shop.php';
             session_start();
             if(isset($_POST['add/update']))
             {
                 $product = new Product($_POST['productIdText'], $_POST['quantityText']);
                 $shop = $_SESSION['shop'];
                 echo $shop->add_product($product);
                 $shop->set_update_status();
                 $_SESSION['shop']= $shop;
             }
         }
        ?>
    </body>
</html>

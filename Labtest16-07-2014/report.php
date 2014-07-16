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
    <h2> Shop Details </h2>
    <body>
        <?php
            require_once 'shop.php';
            require_once 'product.php';            
            session_start();
            
            $shop = $_SESSION['shop'];
            
            echo "Shop Code: ".$shop->get_code(). '<br/>';
            echo "Shop Name: ".$shop->get_name(). '<br/>';
            
            echo 'Product-Id--->Quantity'. '<br/>';
            foreach ($shop->get_all_products() as $a_product) {
                echo $a_product->get_product_Id(). ' ---> '. $a_product->get_quantity(). '<br/>';
            }
                    
        ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <h2> Create a shop </h2>
    <body>
        <form method ="POST">
        <table border="1">
            <tr>
                <td>
                    Code : 
                </td>
                <td>
                    <input type ="text" name ="codeText"><br/>
                </td>   
            </tr>
            <tr>
                <td>
                    Name : 
                </td>
                <td>
                    <input type ="text" name ="nameText"><br/ 
                </td>
            </tr>
            <tr> 
                <td>
                </td>   
                <td>
                    <input type="submit" value ="Create" name = 'create'>
                </td>   
            </tr>             
        </table>            
        </form>
        <?php
        {
            require 'shop.php';
            session_start();
            if (isset($_POST['create']))
            {
                $shop = new Shop($_POST['codeText'], $_POST['nameText']);
                $_SESSION['shop'] = $shop;
                echo 'Shop Created';
            }
        }
        ?>
    </body>
</html>

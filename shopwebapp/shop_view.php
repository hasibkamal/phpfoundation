<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Shop</title>
    </head>
    <body>
        <form method ="POST">
            <h4> Create a shop </h4>
            Code : <input type ="text" name ="codeText"><br/>
            Name : <input type ="text" name ="nameText">
            <input type="submit" value ="Create" name = 'create'>
        </form>
        
        <?php
        {
            require_once 'shop.php';
            require_once 'product.php';
            session_start();
         
            if (isset($_POST['create']))
            {
                $shop = new Shop($_POST['codeText'], $_POST['nameText']);
                $_SESSION['shop'] = $shop;
                echo 'A shop is created';
            }
        }   
         ?>
  </body> 
  </html>
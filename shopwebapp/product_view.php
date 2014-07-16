<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Add/Update Product</title>
    </head>
    <body>
        <form method ="POST">
            <h4> Create a shop </h4>
            Product Id : <input type ="text" name ="productIdText"><br/>
            Quantity : <input type ="text" name ="productQuantityText">
            <input type="submit" value ="Add/Update" name = 'addUpdate'>
        </form>
        
        <?php
        {
            require_once 'product.php';
            require_once 'shop.php';
            session_start();
            
            if (isset($_POST['addUpdate']))
            {
                $product = new Product($_POST['productIdText'], $_POST['productQuantityText']);
                /* @var $shop Shop */
                $shop = $_SESSION['shop'];
                echo $shop->add_product($product);
                $_SESSION['shop'] = $shop;
              
            }
            
        }   
         ?>
  </body> 
  </html>

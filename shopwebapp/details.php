<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Super Shop Details</title>
    </head> 
    <body>
        <h4> Shop Details </h4>
        Shop ID:
        Shop Name: <br/>
        <!--
        
        Product ID Quantity-->
        
        <?php
          require_once 'shop.php';
          require_once 'product.php';
          session_start();
          /* @var $shop Shop */
          $shop = $_SESSION['shop'];
          echo $shop->get_shop_code().' ';
          echo $shop->get_shop_name()."<br/>";
          echo $shop->get_no_of_all_products()."<br/>";
          echo 'Product ID: Quantity: <br/>';
          
          foreach($shop->get_all_products() as $a_product)
          {   /* @var $a_product Product */      
              echo $a_product->get_product_id();
              echo $a_product->get_product_quantity()."<br/>";
          }        
          
        ?>
    </body>
</html>


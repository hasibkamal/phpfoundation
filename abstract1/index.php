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
//        $account = new Account();
        $sv1 = new SavingAccount();
        $sv1->deposit(2000);
        $sv1->withdraw(100);
        $chk1 = new CheckingAccount();
        $chk1->deposit(1000);
        $chk1->withdraw(500);
        
        
        ?>
    </body>
</html>

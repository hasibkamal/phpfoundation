<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Account</title>
    </head>
    <body>
        
        <?php
        require_once 'customer.php';
        require_once 'account.php';
        
        $an_account = new Account('sv-012', '5/6/12');
        $an_account->set_balance(2000);
        $an_account->deposit(500);
        $an_account->withdraw(1000);
        
        $a_customer = new Customer;
        $a_customer->set_customer_account($an_account);
        echo $a_customer->get_customer_account()->get_balance();
        
        
        ?>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Array For each Account</title>
    </head>
    <body>
        <?php
        require_once 'account.php';
        
        $account1 = new Account('sv-001', '3/4/23');
        $account1->deposit(5000);
        $account1->withdraw(1000);
        
        $account2 = new Account('sv-002', '13/4/13');
        $account2->deposit(1000);
        $account2->withdraw(500);
        
        $account3 = new Account('sv-003', '13/4/03');
        $account3->deposit(2000);
        $account3->withdraw(1000);
        
        
        $accounts = array();
        $accounts[]= $account1;
        $accounts[]= $account2;  
        $accounts[]= $account3;
                
        foreach ($accounts as $an_account) 
        {
        echo "Account No: ". $an_account->get_account_no()."<br/>"; 
        echo "Opening Date: ".$an_account->get_opening_date()."<br/>";
        echo "Balance: ".$an_account->get_balance()."<br/>";
        
        }
        
        ?>
    </body>
</html>

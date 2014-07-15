<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Account</title>
    </head>
    <body>
        <form action='index.php' method='GET'>
            <h4>Customer's Account Info Entry</h4>
            Customer Name: <input type = 'text' name = 'customerNameText'><br/>
            Email Address: <input type = 'text' name = 'emailText'><br/>
            Account Number: <input type = 'text' name = 'accountNoText'><br/>
            Opening Date: <input type = 'text' name = 'oepeningDateText'><br/>
            <input type = 'submit' value='Create account' name = 'createButton'><br/>
            <h4>Transaction   </h4>  
            Amount: <input type = 'text' name = 'amountText'>
            <input type = 'submit' value='Deposit' name = 'depositButton'>
            <input type = 'submit' value='Withdraw' name = 'withdrawButton'><br/>
            <input type = 'submit' value='Show Details' name = 'detailsButton'><br/>
        </form>
        
<!--         <form action="detailsreport.php">
         </form>-->
        <?php
        require_once 'customer.php';
        require_once 'account.php';
        session_start();
        
        
        if(isset($_GET['createButton']))
            {
                $account = new Account($_GET['customerNameText'], $_GET['accountNoText'],$_GET['emailText']);
                $_SESSION['an_account']=$account;
                echo 'Account created';
            }
        if(isset($_GET['depositButton']))
            {
                $account = $_SESSION['an_account'];
                $account->deposit($_GET['amountText']);
                $_SESSION['an_account']=$account;
                echo $_GET['amountText'].' deposited.';
            } 
        if(isset($_GET['withdrawButton']))
            {
                $account = $_SESSION['an_account'];
                $account->withdraw($_GET['amountText']);
                $_SESSION['an_account']=$account;
               echo $_GET['amountText'].' withdraw.';
            }
//        $an_account = new Account('sv-012', '5/6/12');
//        $an_account->set_balance(2000);
//        $an_account->deposit(500);
//        $an_account->withdraw(1000);
//        
//        $a_customer = new Customer;
//        $a_customer->set_customer_account($an_account);
//        $a_customer->get_customer_account()->get_balance()."<br/>";
//        
//        $an_account->withdraw(500);
//        $a_customer->get_customer_account()->get_balance();
        
        
        
         
           

        
        ?>
    </body>
</html>

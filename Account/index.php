<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
    </head>
    <body>
        <form action='index.php' method='GET'>
            Customer Name: <input type = 'text' name = 'customerNameText'><br/>
            Account No: <input type = 'text' name = 'accountNoText'><br/>
            Amount: <input type = 'text' name = 'amountText'>
            <input type = 'submit' value='Create' name = 'createButton'><br/>
            <input type = 'submit' value='Deposit' name = 'depositButton'>
            <input type = 'submit' value='Withdraw' name = 'withdrawButton'><br/>
            <input type = 'submit' value='Show Report' name = 'reportButton'><br/>
        </form>
        
        <?php
        require_once 'account.php';
        
         session_start();
            if(isset($_GET['createButton'])){
                $account = new Account($_GET['customerNameText'], $_GET['accountNoText']);
                $_SESSION['an_account']=$account;
                echo 'Account created';
            }
            if(isset($_GET['depositButton'])){
                $account = $_SESSION['an_account'];
                $account->deposit($_GET['amountText']);
                $_SESSION['an_account']=$account;
                echo 'Deposited';
            }
            if(isset($_GET['withdrawButton'])){
                $account = $_SESSION['an_account'];
                echo $account->withdraw($_GET['amountText']);
                $_SESSION['an_account']=$account;
                //echo 'Withdrawn';
            }
            if(isset($_GET['showReportButton'])){
                $account = $_SESSION['an_account'];
                echo $account->get_name()."<br/>".$account->get_number()."<br/>".$account->get_balance();
            }
        
        ?>
    </body>
</html>

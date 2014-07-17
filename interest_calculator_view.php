<!DOCTYPE html>
<html>
    <head>
        <title>A Simple Interest Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Calculate interest</div>
        <form action='interest_calculator_view.php' method="POST">
            Principal: <input type = 'text' name = 'principal'><br/>
            Annual Interest Rate: <input type = 'text' name = 'interestRate'><br/>
            Time Period (In year): <input type = 'text' name = 'year'><br/>
            <input type = 'submit' value='calculate' name = 'calculate'><br/>
        </form>     
        
    <?php
        require_once 'simple_interest_calculator.php';

        if(isset($_POST['calculate']))
        {
           $calculator = new simple_interest_calculator();
           $calculator->principal = $_POST['principal'];
           $calculator->interest_rate = $_POST['interestRate'];
           $calculator->year = $_POST['year'];
           $total_amount = $calculator->calculate_total_amount();

            echo "Result: ".$calculator->total_amount;
            
           //echo "Result: ".$total_amount;
         
        }

      ?>
        
    </body>
</html>



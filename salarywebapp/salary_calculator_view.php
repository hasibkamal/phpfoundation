<!DOCTYPE html>
<html>
    <head>
        <title>Salary Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Calculate Total Salary</div>
        <form action='salary_calculator_view.php' method="POST">
            Employee Name: <input type = 'text' name = 'employee_name'><br/>
            Basic Amount: <input type = 'text' name = 'basic'><br/>
            House Rent: <input type = 'text' name = 'house_rent'> % of Basic<br/>
            Medical Allowance: <input type = 'text' name = 'medical_allowence'>% of Basic<br/>
            <input type = 'submit' value='Show me Salary' name = 'show_salary'><br/>
        </form>     
        
    <?php
        require_once 'calculate_salary.php';

        if(isset($_POST['show_salary']))
        {
           $obj_salary = new calculate_salary();
           $obj_salary->name = $_POST['employee_name'];
           $obj_salary->basic = $_POST['basic'];
           $obj_salary->house_rent_percentage = $_POST['house_rent'];
           $obj_salary->medical_allowence_percentage = $_POST['medical_allowence'];
           $total_salary =  $obj_salary->calculate_total_salary();
           
            echo $obj_salary->name.", your total salary: ";
            echo $obj_salary->calculate_total_salary();
            echo " taka";
           //echo "Result: ".$total_amount;
         
        }

      ?>
        
    </body>
</html>

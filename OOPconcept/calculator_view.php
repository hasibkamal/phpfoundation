<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Calculator</title>
    </head>
    <body>
        <form action="calculator_view.php" method="POST">
            First No : <input type = 'number' name="first_no"><br/>
            Second No : <input type = 'number' name="second_no"><br/>
            <input type="submit" value="Add " name="add">
            <input type="submit" value="Substract " name="substract">
            <input type="submit" value="Multiply " name="multiply">
            <input type="submit" value="Divide " name="divide">
            
        </form>

       <?php   
       require_once('calculator.php');
       $an_operation= new calculator;
       
       if(isset($_POST['first_no']) && isset($_POST['second_no']))
        {
            $first_no= $_POST['first_no'];
            $second_no = $_POST['second_no'];
        }
        
       if(isset($_POST['add']))
        {
           echo "<br/>Addition of the two numbers is: ". $an_operation->add($first_no.$second_no);
        }
        
        
        
    if(isset($_POST['substract']))
        {
            $substract = new calculator;
            $substract->first_no_field = $_POST['first_no'];
            $substract->second_no_field = $_POST['second_no'];
            
            echo "<br/>Subtraction of the two numbers is: ". $substract->substract();
        }
        if(isset($_POST['multiply']))
        {
            $multiply = new calculator;
            $multiply->first_no_field = $_POST['first_no'];
            $multiply->second_no_field = $_POST['second_no'];
            
            echo "<br/>Multiplication of the two numbers is: ". $multiply->multiplication();
        }
        if(isset($_POST['divide']))
        {
            $divide = new calculator;
            $divide->first_no_field = $_POST['first_no'];
            $divide->second_no_field = $_POST['second_no'];
            
            echo "<br/>Division of the two numbers is: ". $divide->division();
        }
       ?> 
        
     </body>
</html>


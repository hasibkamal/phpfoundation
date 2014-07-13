<html>
    <head>
        <title> employee info</title>
    </head>
    <body>
        
        <form action='employeeinfo.php' method="POST">
            ID: <input type = 'text' name = 'idText'><br/>
            Name: <input type = 'text' name = 'nameText'><br/>
            Salary: <input type = 'text' name = 'salaryText'><br/>
            <input type = 'submit' name = 'submitButton'><br/>
        </form>
  
<?php
require_once 'employee.php';
if(isset($_POST['submitButton']))
{
    $an_employee = new Employee();
   $an_employee->id = $_POST['idText'];
   $an_employee->name = $_POST['nameText'];
    $an_employee->salary =$_POST['salaryText'];;
    
    //$id = $_POST['idText'];
    //$name = $_POST['nameText'];
    //$salary = $_POST['salaryText'];
    //echo $id.' '.$name.' '.$salary;
    
    echo  $an_employee->id.' '.$an_employee->name.' '. $an_employee->salary;
}

?>
  </body>
</html>
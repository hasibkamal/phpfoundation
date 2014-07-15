<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method ="POST">
            Add Student <br/>
            Name : <input type ="text" name ="studentNameText"><br/>
            Reg No : <input type ="text" name ="regNoText"><br/>
            <input type="submit" value ="Add" name='addButton'>
        </form>

<?php
        require_once 'student.php';
        require_once 'department.php';
        session_start();

        if(isset($_POST['addButton']))
        {   
            /* @var $student Studen */
            $a_student= new Student($_POST['studentNameText'], $_POST['regNoText']);
            /* @var $department Department */
            $department = $_SESSION['department'];
            echo $department->add_student($a_student);
            $_SESSION['department']= $department;
            
        }

?>
    </body>
</html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Entry Department</title>
    </head>
    <body>
        <form method ="POST">
            Add Department <br/>
            Code : <input type ="text" name ="codeText"><br/>
            Name : <input type ="text" name ="nameText"><br/>
            <input type="submit" value ="Save" name = 'saveButton'>
            
        </form>
        
<?php
    require_once 'department.php';
    require_once 'student.php';

    if(isset($_POST['saveButton']))
    {
        $department = new Department($_POST['codeText'], $_POST['nameText']);
        $_SESSION['department'] = $department;
        echo 'department stored';
    }

    ?>
        
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Session</title>
    </head>
    <body>
        
        
        <?php
        
//        $a_number = 100;
        
        session_start();
        //$a_number= $_SESSION['number1'];
        $_SESSION['number1'] = $_SESSION['number1'] + 10;
       echo $_SESSION['number1'];
        ?>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Session Example 2</title>
    </head>
    <body>
        <form action='details.php' method="GET">
            <input type =submit>  
        </form>
        
        <?php
            require_once 'person.php';
            session_start();
            $person = new person('I', 'S', 'J');
            $_SESSION['a_person'] = 100;
        
        
        ?>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Reverse Full Name</title>
    </head>
    <body>
        <form action="person_view.php" method="POST">
            First Name: <input type = text name="first_name"><br/>
            Middle Name: <input type = text name="middle_name"><br/>
            Last Name: <input type = text name="last_name"><br>
            <input type="submit" value="Get full name: " name="get_name"><br/>
            <input type="submit" value="Get Reverse Full name: " name="reverse_name">
            
        </form>
        
        
      <?php
            
            require_once('person.php');
            $a_person = new person('I', 'S', 'J');
            
            
//            $a_person = new person;
//            $a_person->set_first_name();
//            $a_person->set_middle_name();
//            $a_person->set_last_name();
            
            
       if(isset($_POST['get_name']))
        {
//            $a_person->first_name =$_POST['first_name'];
//            $a_person->middle_name =$_POST['middle_name'];
//            $a_person->last_name =$_POST['last_name'];

             echo "Full name: ". $a_person->get_full_name(), "<br/>";
             //echo "Reverse Full Name: " . $a_person->get_reverse_name();
        }
        
       if(isset($_POST['reverse_name']))
        {
            //echo "Full name: ". $a_person->get_full_name(), "<br/>";
             echo "Reverse Full Name: " . $a_person->get_reverse_name();
        }
        
        ?>
    </body>
</html>


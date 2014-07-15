<html>
    <head>
        <meta charset="UTF-8">
        <title>Circle Area</title>
    </head>
    <body>
        <form action="circle_view.php" method="POST">
            Radius of Circle : <input type = text name="radius">
            <input type="submit" value="Area " name="get_area">
            
        </form>

       <?php
       if(isset($_POST['get_area']))
        {
            require_once('circle.php');
            $a_circle = new circle;
            $a_circle->radius =$_POST['radius'];
       
            echo "<br/>Area of the circle is: ". $a_circle->get_circle_area()." square unit.";
        }
    
       ?> 
        
     </body>
</html>
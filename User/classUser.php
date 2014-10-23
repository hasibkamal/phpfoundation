<?php

//defining a class
class User {
var $name = "FTFL";
 var $email = " ";
    
 function getName()
 {
     return "FTFL2";
 }
}

//instantiating an object from the class
$user = new User();

//debug the variable
//var_dump($user);
echo $user->name;
echo $user->getName();

<?php
class User
{
    protected function userAge(){}
}

class Person extends User
{
    public function getUserAge()
            {
        return $this->userAge();
            }
}


$user = new Person;
echo $user->getUserAge();
//echo $user->userAge();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


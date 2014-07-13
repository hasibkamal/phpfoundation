<?php

/**
 * Description of employee
 *
 * @author Lab5
 */
class OfficeEmployee {
    //put your code here
    public $id;
    public $name;
    public $salary;
    
    public function get_salary_with_bonus()
    {
        return $this->salary +5000;
    }

     public function get_salary_with_calculated_bonus()
        {
         if($this->salary <= 10000)
         {
           $bonus = $this->salary*0.50;
           $total_salary = $this->salary + $bonus;
           return $total_salary;
         }
          elseif(10000 < $this->salary && $this->salary<=30000)
         {
           return $this->salary + $this->salary*0.30;  
         }
          elseif( $this-> salary>30000)
         {
           return $this->salary + $this->salary*0.20;  
         }
//        else 
//          {
//            return $this->salary;
//        }
        }

}
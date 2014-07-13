<?php

class calculate_salary
{
        public $name;
        public $basic;
        public $house_rent_percentage;
        public $house_rent;
        public $medical_allowence_percentage;
        public $medical_allowence;
        public $total_salary;
    
    function calculate_total_salary()
    {
//    $name;
//    $basic;
//    $house_rent_percentage;
//    $house_rent;
//    $medical_allowence_percentage;
//    $medical_allowenc;
//    $total_salary;
        
        $this->house_rent = ($this->house_rent_percentage * $this->basic)/100;
        $this->medical_allowence = ($this->medical_allowence_percentage * $this->basic)/100;
        $this->total_salary = $this->basic + $this->house_rent + $this->medical_allowence;
        
        return $this->total_salary;
    }
    
    
    
}


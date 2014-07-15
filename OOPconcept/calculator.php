<?php

class calculator
{
    //public $first_no_field;
    //public $second_no_field;
 
        public function add($first_no,$second_no)
            {
              //$add = $this->first_no_field + $this->second_no_field;  
              return $first_no + $second_no; 

            }
         public function substract($first_no,$second_no)
            {
              //$substract = $this->first_no_field - $this->second_no_field; 
              return $first_no - $second_no;  

            }
        public function multiply($first_no,$second_no)
            {  
              //$multiply = $this->first_no_field * $this->second_no_field; 
             return $first_no * $second_no; 

            }
        public function divide($first_no,$second_no)
            {
            //$divide = $this->first_no_field / $this->second_no_field; 
               return $first_no / $second_no; 
            }
 
 
}


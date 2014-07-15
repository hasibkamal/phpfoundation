<?php

class Account
{
    private $name;
    private $number;
    private $balance;
    
    public function get_name() 
     {
        return $this->name;
      }

    public function get_number() 
     {
        return $this->number;
    }

        
    function __construct($name, $number) 
    {
        $this->name = $name;
        $this->number = $number;
    }

    public function deposit($amount)
    {
      $this->balance = $this->balance + $amount;  
    }
    
    public function withdraw($amount)
    {
      $this->balance = $this->balance - $amount;  
    }
    
}

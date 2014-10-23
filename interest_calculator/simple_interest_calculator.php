<?php

class simple_interest_calculator
{
    
public $principal;
public $interest_rate;
public $year;
public $interest;
public $total_interest;
public $total_amount;

//public $total_amount = ($principal + $principal*$interest)* year;

public function calculate_total_amount()
    {
       $this->interest= ($this->principal*$this->interest_rate)/100;
       $this->total_interest = $this->year*$this->interest;
       $this->total_amount=$this->total_interest+$this->principal;
       //return $total_amount;
    }
}


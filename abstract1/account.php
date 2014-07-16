<?php

/**
 * Description of Account
 *
 * @author LAB5
 */
abstract class Account {
    private $number;
    private $balance;
    
    public abstract function transfer($to);
    
    public function deposit($amount)
    {
        $this->balance += $amount;
    }
    
    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }
    
    public function get_number() {
        return $this->number;
    }

    public function get_balance() {
        return $this->balance;
    }

    public function set_number($number) {
        $this->number = $number;
    }

   
}

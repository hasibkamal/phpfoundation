<?php

class Account
{
    private $account_no;
    private $opening_date;
    private $balance;
    
    function __construct($account_no, $opening_date) 
     {
        $this->account_no = $account_no;
        $this->opening_date = $opening_date;
        $this->balance = 0;
    }

    public function set_account_no($account_no) {
        $this->account_no = $account_no;
    }

    public function set_opening_date($opening_date) {
        $this->opening_date = $opening_date;
    }
    
//  There is no need to set_balance.

    
    public function get_account_no() {
        return $this->account_no;
    }

    public function get_opening_date() {
        return $this->opening_date;
    }

    public function get_balance() {
        return $this->balance;
    }
     
    public function deposit($amount)
    {
        return $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        return $this->balance -= $amount;
    }
}


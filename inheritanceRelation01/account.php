<?php

/**
 * Description of account
 *
 * @author Lab5
 */
class Account {
    private $number;
    private $opening_date;
    private $balance;
    
    function __construct($number, $opening_date) {
        $this->number = $number;
        $this->opening_date = $opening_date;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getOpening_date() {
        return $this->opening_date;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setOpening_date($opening_date) {
        $this->opening_date = $opening_date;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
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

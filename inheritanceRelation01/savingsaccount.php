<?php

/**
 * Description of savingsaccount
 *
 * @author Lab5
 */
class SavingsAccount extends Account
{
  private $interest_amount;  
  
  function __construct($interest_amount) 
  {
      $this->interest = $interest_amount;
  }

  public function get_interest_amount() {
      return $this->interest_amount;
  }

  public function set_interest_amount($interest_amount) {
      $this->interest_amount = $interest_amount;
  }


  
}

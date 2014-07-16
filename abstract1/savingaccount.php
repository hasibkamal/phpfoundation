<?php

/**
 * Description of savingaccount
 *
 * @author LAB5
 */
class SavingAccount extends Account 
{
    private $interestamount;
    
    public function withdraw($amount) {
        if($this->get_balance() - $amount >=0)
        {
            parent::withdraw($amount);
        }
        else 
     {
      return 'Insufficient Balance';
     }
    }


    public function get_interestamount() {
        return $this->interestamount;
    }

    public function set_interestamount($interestamount) {
        $this->interestamount = $interestamount;
    }

    public function transfer($to) {
        
    }

}

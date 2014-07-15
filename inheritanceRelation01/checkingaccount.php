<?php


/**
 * Description of checkingaccount
 *
 * @author Lab5
 */

class CheckingAccount extends Account{
    //put your code here
    private $service_charge;
    
    function __construct($service_charge) 
    {
        $this->service_charge = $service_charge;        
    }

    
}

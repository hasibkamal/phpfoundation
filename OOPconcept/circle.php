<?php

class circle
{
    public $radius;
    const PI = 3.1416;
    
    public function get_circle_area()           
    {   
        
        $area = $this->radius * $this->radius * pi();
        return $area;
    }
    
    
}


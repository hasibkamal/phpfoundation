<?php
/**
 * Description of shop
 *
 * @author LAB5
 */

class Shop 
{
    private $shop_code;
    private $shop_name;
    private $product_list; //array_type
 
    
    function __construct($shop_code, $shop_name) {
        $this->shop_code = $shop_code;
        $this->shop_name = $shop_name;
        $this->product_list = array();
    }

    public function add_product($a_product)
    {
        if(count($this->product_list)<1){
             $this->product_list[] = $a_product;
             return 'Product added1.';            
        }
        else
        {
            foreach ($this->product_list as $product) 
            { 
                /* @var $product Product */
             if($product->get_product_id()== $a_product->get_product_id())
             {
              $amount= $product->get_product_quantity() + $a_product->get_product_quantity();
              $product->update_product_quantity($a_product->get_product_id(), $amount);
              echo 'Product is updated.';
              break;
             }
             else
                {
                 $this->product_list[] = $a_product;
                 return 'Product added2.';
                 break;
                }
            }            
        }
        
    }
    
    public function get_no_of_all_products() 
            {
        return count($this->product_list);
    }
    
    public function get_all_products()
    {
        return $this->product_list;
    }
    
    public function get_shop_code() {
        return $this->shop_code;
    }

    public function get_shop_name() {
        return $this->shop_name;
    }

    public function set_shop_code($shop_code) {
        $this->shop_code = $shop_code;
    }

    public function set_shop_name($shop_name) {
        $this->shop_name = $shop_name;
    }  
    
}

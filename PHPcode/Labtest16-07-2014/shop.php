<?php
class Shop {
    private $code;
    private $name;
    private $product_list;
    private $update_status;        

    
    public function __construct($code, $name) {
        $this->name = $name;
        $this->code = $code;
        $this->product_list = array();
    }
    
    function set_update_status()
    {
        $this->update_status = 0;
    }
        
    public function add_product($a_product)
    {
        
        foreach ($this->product_list as $product)
                {
                    if($a_product->get_product_Id() == $product->get_product_Id())
                    {
                        echo $product->update_product($a_product);
                        $this->update_status = 1;
                    }

                }

        
        if ($this->update_status == 0)
            {                                
                $this->product_list[] = $a_product;
                return 'Product Added';
            }
            
                       
    }
            
    
            
    function get_name()
    {
        return $this->name;
    }
    
    function get_code()
    {
        return $this->code;
    }

    public function get_no_of_products() {
        return count($this->product_list);
    }
    
    public function get_all_products()
    {
        return $this->product_list;
    }

}
?>

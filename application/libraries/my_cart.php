<?php
    class my_cart extends CI_Cart{
        public function main(){
            echo "This is index function in the my_cart class";
            $ci = &get_instance();
            $ci->load->library('cart');
            $ci->cart->contents();
        }
    }

?>
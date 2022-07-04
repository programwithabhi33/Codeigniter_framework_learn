<?php

    class Test {
        
        public function abhi(){
            // &get_instance returns a super object reference to that variable
            // You can use the load functions and super object power in your custom library
            $ci = &get_instance();

            // You can include helper functions like this
            $ci->load->helper('array');
            main();

            echo "This is abhi function under the Test library";
        }
    }


?>
<?php
    class Abhi extends CI_Controller{
        public function index(){
            echo "This is index function in the Abhi class";
            abhishek();
            
        }
        // function abhishek2(){
        //     // To use the helper function you have to load the helper function in each function where you want to use it.
        //     // $this->load->helper("abhi"); // This is how you load the helper function in the controller
        //     // abhishek(); // This is how you use the helper function in the controller
        //     $this->load->library('email'); // This is how you load the library in the controller
        //     $main = $this->email->from('abhishek'); // This is how you use the library in the controller
        //     print_r($main);

        // }

        function main(){
            $this->load->library('email');
            $this->email->show();
        }

        function sam(){
            $this->load->library('cart');

        }
    }
?>
<?php
     
    //  This is how you create your custom controller and extends from ci_controller and add your custom functions
    class my_controller extends CI_Controller{
        public function mainThing(){
            echo "This is abhi function in the controller awesome know!!!";
        }
    }

    class abhiController extends my_controller{
        public function toThing(){
            echo "This is the toThing function under the abhiController class";
        }
    }

?>
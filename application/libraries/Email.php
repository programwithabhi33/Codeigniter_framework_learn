<?php

    // This is how you can add functions and overwrite function in existing library
    // Just extends the existing library and name your custom library to my_{existing library name}

    // You can also overwrite existing library just name you custom library to CI_Email and email library is your custom library and existing Email library is ignored
    class CI_Email {
        public function show(){
            echo "This my custom library";
            // get_instance returns the super object reference to that variable
            // $ci = &get_instance();
            

        }
    }
?>
<?php

    // This is how you can add functions and overwrite function in existing library
    // Just extends the existing library and name your custom library to my_{existing library name}

    // You can also overwrite existing library just name you custom library to CI_Email and email library is your custom library and existing Email library is ignored
    class my_email extends CI_Email {
        public function show(){
            echo "This is custom public function under the my_email library";
        }
    }
?>
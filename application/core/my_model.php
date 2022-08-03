<?php

class my_model extends CI_Model{
    public function testThing (){

        echo "This is the user model core ";


    }
}


class programwithabhi extends my_model{
    public function pwa (){

        echo "This is the pwa function under the my_model and under the programwithabhi class";


    }
}
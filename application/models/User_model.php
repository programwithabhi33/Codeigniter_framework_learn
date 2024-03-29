<?php

class User_model extends programwithabhi{
    public function getdata (){
        // $this->testThing();
        $this->pwa();
       
        // You can load database library in autoload.php 
        // $this->load->database();
        // Here accesssing the database functions 
        // The db->query returns a object store in the data varible
        // $data = $this->db->query("select * from users");

        // Select query in active class , select only name in database column and returns in db object
        // $this->db->select("name");

        // Where condition in active class, select where sno is 2 in database column and returns in db object
        // $this->db->where("sno",2);

        // $this->db->select_min('sno');

        
        
        // $data = $this->db->get("users");
        // $this->load->library('email');
        // $this->email->show();
        // die();


        // Method chaining
        // $data = $this->db->select('name')->where('sno',2)->get('users');
        // $data = $this->db->where('sno',1)->get('users');

        $data = $this->db->get('users');

        // Limit query first argument is table name and second argument is the limit object and third is array index
        // $data = $this->db->get("users",3,0);

        // You can call or reutrn the data object corresponding function or methods
        // The result function return the multiple objects in single array
        // return $data->result();

        // The result_array function return the multiple array in single array
        return $data->result_array();
    }
}

?>
<?php

class User_model extends CI_Model{
    public function getdata (){
        $this->load->database();
        // Here accesssing the database functions 
        // The db->query returns a object store in the data varible
        // $data = $this->db->query("select * from users");

        // You 
        $data = $this->db->get("users");

        // You can call or reutrn the data object corresponding function or methods
        // The result function return the multiple objects in single array
        // return $data->result();

        // The result_array function return the multiple array in single array
        return $data->result_array();
    }
}

?>
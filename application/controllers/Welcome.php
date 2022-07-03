<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// Loading the model here this returns object with the same name of the model class
		$this->load->model('User_model');

		// Calling the User_model objects functions and storing the return value in data variable
		$data['users']= $this->User_model->getdata();
		// echo "<pre>";

		print_r($data);
		echo "<br>";

		// Loading the libraries 
		// $this->load->library('cart');

		// Loading the custom libraries 
		$this->load->library('test');
		$this->test->abhi();
		echo "<br>";

		// Loading multiple libraries with array 
		// $this->load->library(array('cart','driver'));

		// Loading the system helper functions Note: you can overwrite or add system helper functions with adding the my_ before the file and save the file in application folder 
		// $this->load->helper('array');
		$this->load->helper('abhi');
		abhishek();
		echo "<br>";


		// Loading the main view template
		// When a array is passed to view the keys of an array is passed insted of the array.In line no 27 we defined the user as a key to the $data array,the user key store the return the value in his value, when you passed the $data array the key will be passed to view (you can define multiple keys )
		$this->load->view('main',$data);
	} 
	public function demo()
	{
		echo 'Abhishek is a good programmer';
		
	}

}

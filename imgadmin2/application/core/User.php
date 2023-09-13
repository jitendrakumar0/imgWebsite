<?php
	class User extends CI_Controller 
	{  
	   
		function __construct() {
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('Form_model');
		 
			if(empty($this->session->userdata('user_data')))
			{
				$this->session->set_userdata('toursuccmsg','Please First Login');
				
				header("location:".base_url('login'));
				die;
			}	
		 
		} 
  
	}
?>
<?php
	class Admin extends CI_Controller 
	{  
	   
		function __construct() {
			parent::__construct();
			$this->load->helper('query');
			if($this->session->userdata('store100mlmadmin')==''){
				header("location:".root()."logout");
				die;
			}
		} 
  
	}
?>
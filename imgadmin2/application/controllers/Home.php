<?php



class Home extends Admin {



function __construct() {

parent::__construct();

	$this->load->helper('form');

	$this->load->library('session');

	$this->load->helper('query');

	$this->load->database();

	$this->load->model("Form_model");

 }

	public function index(){ 
		if($this->session->userdata('store100type')=='lead_user'){
			header("location:".base_url().'leads/view_leads');
		}else{
			$data['title']='Admin Dashboard';
			$this->load->view('header',$data); 
			$this->load->view('dashboard'); 
			$this->load->view('footer');
		} 
	}
	
	
 }

?>
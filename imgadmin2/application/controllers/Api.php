<?php
class Api extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function team_list(){

		$input = $this->db->get('team')->result_array();

		$json['error']='0';
		$json['msg']='Team fetch successful.';
			 
			   foreach($input as $result1)
			   {
				 $cat = $result1['category'];
				 $json['result'][]=array(
				 'category'=>$cat,        
				'name'=>$result1['name'],
				'designation'=>$result1['designation'],      
				'color_image' => base_url().'images/team/'.$result1['color_image'],
				'image' => base_url().'images/team/'.$result1['image']        
				);
			   }
	

		$jsonFinal[]=$json;
		echo json_encode($jsonFinal);
		die;
		}
	

}
?>
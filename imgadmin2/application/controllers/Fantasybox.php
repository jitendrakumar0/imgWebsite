<?php
class Fantasybox extends Admin {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('query');
        $this->load->model('Form_model');
        $this->load->model('Common_Model');
        $this->load->library('form_validation');   
    } 
	

	public function fantasyContacts(){
		$result['result']=$this->db->order_by('id','DESC')->get('fantasy_enquiry')->result_array(); 
		$header['title']="View Fantasy Box Contacts";
        $this->load->view('header',$header);		
        $this->load->view('fantasybox/view_fantasy_contacts',$result);
        $this->load->view('footer');
	}
        
}
?>
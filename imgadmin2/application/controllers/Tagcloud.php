<?php
class Tagcloud extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_tagcloud()
	{ 
		$this->load->view('header');
		$this->load->view('Tagcloud/add_tagcloud');
		$this->load->view('footer');
	}

	function tagcloudsubmit()
	{		
		$data=$this->input->post();
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('tagclouds',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Tagcloud Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'tagclouds',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Tagcloud Successfully Updated.');
		}
		redirect(base_url().'tagcloud/view_tagcloud');
		exit;    
	}
	
	
	public function view_tagcloud()
	{
		$result['result']=$this->Common_Model->getAllResult('','tagclouds',array());
		$this->load->view('header');
		$this->load->view('Tagcloud/view_tagcloud',$result);
		$this->load->view('footer');
	}

	public function delete_tagcloud($sid)
	{
	$this->Common_Model->deleteData('id',$sid,'tagclouds');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Tagcloud Successfully Deleted.');
	redirect(base_url().'tagcloud/view_tagcloud');
	exit;    
	}
	
	public function edit_tagcloud($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','tagclouds',$where);	   
		$this->load->view('header');
		$this->load->view('Tagcloud/add_tagcloud',$data);
		$this->load->view('footer');
	} 

	function tagcloud_status()
	{
	//	echo"hii"; die;
		$sid = $_GET['vopll'];
		$table = $_GET['table'];
		$value = $_GET['value'];
			$this->db->where('id',$sid)->update($table,array('status'=>$value));
		die;
	}  
		
}
?>
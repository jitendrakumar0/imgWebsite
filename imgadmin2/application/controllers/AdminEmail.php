<?php
class AdminEmail extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_adminemail()
	{ 
		$this->load->view('header');
		$this->load->view('AdminEmail/add_adminemail');
		$this->load->view('footer');
	}

	function adminemailsubmit()
	{		
		
		$data=$this->input->post();	
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('admin_email',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Admin Email Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'admin_email',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Admin Email Successfully Updated.');
		}
		redirect(base_url().'adminemail/view_adminemail');
		exit;    
	}
	
	
	public function view_adminemail()
	{
		$result['result']=$this->Common_Model->getAllResult('','admin_email',array());
		$this->load->view('header');
		$this->load->view('AdminEmail/view_adminemail',$result);
		$this->load->view('footer');
	}

	public function delete_adminemail($sid)
	{
	$this->Common_Model->deleteData('id',$sid,'admin_email');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Admin Email Successfully Deleted.');
	redirect(base_url().'adminemail/view_adminemail');
	exit;    
	}
	
	public function edit_adminemail($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','admin_email',$where);	   
		$this->load->view('header');
		$this->load->view('AdminEmail/add_adminemail',$data);
		$this->load->view('footer');
	}


	function mail_status()
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
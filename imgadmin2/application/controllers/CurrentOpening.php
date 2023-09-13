<?php
class CurrentOpening extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function addcurrentopening()
	{ 
		$this->load->view('header');
		$this->load->view('CurrentOpening/addcurrentopening');
		$this->load->view('footer');
	}

	function currentopeningsubmit()
	{		
		$data=$this->input->post();
	
	$image=$this->input->post('old_image');
		if(isset($_FILES['image']['name'])){
		if($_FILES['image']['name'] !=""){
			$ran_no = rand(100000,999999);
			$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
			$this->load->library('upload');
			$config['upload_path']   = './images/currentopening';
			$config['allowed_types'] = '*';
			$config['max_size']      = 0;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image'))
				{
					$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
                    redirect(base_url().'currentopening/viewcurrentopening');
				    exit; 					
				}
				else
				{					
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name'];			
					unlink("images/currentopening/".$data['old_image']);
				} 
		
		}
	}
		$data['image']=$image;
		unset($data['old_image']);
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('current_opening',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Current Opening Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'current_opening',$data);
			
			$this->session->set_flashdata('digitalcashadminmessageTrue','Current Opening Successfully Updated.');
		}
		redirect(base_url().'currentopening/viewcurrentopening');
		exit;    
	}
	
	
	public function viewcurrentopening()
	{
		$result['result']=$this->Common_Model->getAllResult('','current_opening',array());
		$this->load->view('header');
		$this->load->view('CurrentOpening/viewcurrentopening',$result);
		$this->load->view('footer');
	}

	public function deletecurrentopening($sid)
	{
	$res = $this->db->where('id',$sid)->get('current_opening')->row_array();
	unlink("images/currentopening/".$res['image']);
	$this->Common_Model->deleteData('id',$sid,'current_opening');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Current Opening Successfully Deleted.');
	redirect(base_url().'currentopening/viewcurrentopening');
	exit;    
	}
	
	public function editcurrentopening($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','current_opening',$where);	   
		$this->load->view('header');
		$this->load->view('CurrentOpening/addcurrentopening',$data);
		$this->load->view('footer');
	}


	function statuschange()
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
<?php
class Technology extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_technology()
	{ 
		$this->load->view('header');
		$this->load->view('Technology/add_technology');
		$this->load->view('footer');
	}

	function technologysubmit()
	{		
		$data=$this->input->post();
	
	$image=$this->input->post('old_image');
		if(isset($_FILES['image']['name'])){
		if($_FILES['image']['name'] !=""){
			$ran_no = rand(100000,999999);
			$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
			$this->load->library('upload');
			$config['upload_path']   = './images/technology';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']      = 0;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('image'))
				{
					$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
                    redirect(base_url().'technology/view_technology');
				    exit; 					
				}
				else
				{
					//$this->upload->do_upload('image');
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name'];
					unlink("images/technology/".$data['old_image']);
				}
		}
	}
		$data['image']=$image;
		unset($data['old_image']);
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('technology',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Technology Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'technology',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Technology Successfully Updated.');
		}
		redirect(base_url().'technology/view_technology');
		exit;    
	}
	
	
	public function view_technology()
	{
		$result['result']=$this->Common_Model->getAllResult('','technology',array());
		$this->load->view('header');
		$this->load->view('Technology/view_technology',$result);
		$this->load->view('footer');
	}

	public function delete_technology($sid)
	{
	$res = $this->db->where('id',$sid)->get('technology')->row_array();
	unlink("images/technology/".$res['image']);
	$this->Common_Model->deleteData('id',$sid,'technology');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Technology Successfully Deleted.');
	redirect(base_url().'technology/view_technology');
	exit;    
	}
	
	public function edit_technology($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','technology',$where);	   
		$this->load->view('header');
		$this->load->view('Technology/add_technology',$data);
		$this->load->view('footer');
	}


	function techno_status()
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
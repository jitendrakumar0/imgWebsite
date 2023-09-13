<?php
class Webtype extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_webtype()
	{ 
		$this->load->view('header');
		$this->load->view('Website/add_webtype');
		$this->load->view('footer');
	}

	function webtypesubmit()
	{		
		$data=$this->input->post();
	
	$image=$this->input->post('old_image');
		if(isset($_FILES['image']['name'])){
		if($_FILES['image']['name'] !=""){
			$ran_no = rand(100000,999999);
			$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
			$this->load->library('upload');
			$config['upload_path']   = './images/website';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']      = 0;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('image'))
				{
					$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
                    redirect(base_url().'webtype/view_webtype');
				    exit; 					
				}
				else
				{
					//$this->upload->do_upload('image');
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name'];
					unlink("images/website/".$data['old_image']);
				}
		}
	}
		$data['image']=$image;
		unset($data['old_image']);
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('website_type',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Website Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'website_type',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Website Successfully Updated.');
		}
		redirect(base_url().'webtype/view_webtype');
		exit;    
	}
	
	
	public function view_webtype()
	{
		$result['result']=$this->Common_Model->getAllResult('','website_type',array());
		$this->load->view('header');
		$this->load->view('Website/view_webtype',$result);
		$this->load->view('footer');
	}

	public function delete_webtype($sid)
	{
	$res = $this->db->where('id',$sid)->get('website_type')->row_array();
	unlink("images/website/".$res['image']);
	$this->Common_Model->deleteData('id',$sid,'website_type');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Website Successfully Deleted.');
	redirect(base_url().'webtype/view_webtype');
	exit;    
	}
	
	public function edit_webtype($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','website_type',$where);	   
		$this->load->view('header');
		$this->load->view('Website/add_webtype',$data);
		$this->load->view('footer');
	}


	function change_status()
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
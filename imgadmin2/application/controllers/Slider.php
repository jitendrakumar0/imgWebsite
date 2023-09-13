<?php
class Slider extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_slider()
	{ 
		$this->load->view('header');
		$this->load->view('Slider/add_slider');
		$this->load->view('footer');
	}

	function slidersubmit()
	{		
		$data=$this->input->post();
	
		$image=$this->input->post('old_image');
		if(isset($_FILES['image']['name'])){
			if($_FILES['image']['name'] !=""){
				$fileExt=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
				$ran_no = rand(100000,999999);
				$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
				$this->load->library('upload');
				$config['upload_path']   = './images/slider';
				$config['allowed_types'] = '*';
				$config['max_size']      = 0;
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$this->upload->initialize($config); 
				
				if(!$this->upload->do_upload('image')){
						$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
						redirect(base_url().'slider/view_slider');
						exit; 					
				}else if($fileExt!='jpg' && $fileExt!='jpeg' && $fileExt!='gif' && $fileExt!='png' && $fileExt!='webp'){
					$this->session->set_flashdata('digitalcashadminmessageFalse','Invalid image type.please try again.');
					redirect(base_url().'slider/view_slider');
					exit; 
				}else{					
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name'];
					unlink("images/slider/".$data['old_image']);
				}
				
			}
		}
		
		$data['image']=$image;
		unset($data['old_image']);
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('sliders',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Slider Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'sliders',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Slider Successfully Updated.');
		}
		redirect(base_url().'slider/view_slider');
		exit;    
	}
	
	
	public function view_slider()
	{
		$result['result']=$this->Common_Model->getAllResult('','sliders',array());
		$this->load->view('header');
		$this->load->view('Slider/view_slider',$result);
		$this->load->view('footer');
	}

	public function delete_slider($sid)
	{
	$res = $this->db->where('id',$sid)->get('sliders')->row_array();
	unlink("images/slider/".$res['image']);
	$this->Common_Model->deleteData('id',$sid,'sliders');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Slider Successfully Deleted.');
	redirect(base_url().'slider/view_slider');
	exit;    
	}
	
	public function edit_slider($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','sliders',$where);	   
		$this->load->view('header');
		$this->load->view('Slider/add_slider',$data);
		$this->load->view('footer');
	}


	function slider_status()
	{
	//	echo"hii"; die;
		$sid = $_GET['vopll'];
		$table = $_GET['table'];
		$value = $_GET['value'];
			$this->db->where('id',$sid)->update($table,array('tab_status'=>$value));
		die;
	}


   
		
}
?>
<?php
class Testimonial extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_testimonial()
	{ 
		$this->load->view('header');
		$this->load->view('Testimonial/add_testimonial');
		$this->load->view('footer');
	}

	function testimonialsubmit()
	{		
		$data=$this->input->post();
	
		$image=$this->input->post('old_image');
		if(isset($_FILES['image']['name'])){
			if($_FILES['image']['name'] !=""){
				$ran_no = rand(100000,999999);
				$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
				$this->load->library('upload');
				$config['upload_path']   = './images/testimonial';
				$config['allowed_types'] = 'jpg|jpeg|gif|png|webp';
				$config['max_size']      = 0;
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$this->upload->initialize($config); 
				if (!$this->upload->do_upload('image'))
				{
					$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
                    redirect(base_url().'testimonial/view_testimonial');
				    exit; 					
				}
				else
				{					
					$upload_data = $this->upload->data();
				$image = $upload_data['file_name'];
				unlink("images/testimonial/".$data['old_image']);
				}
			
			}
	}
		$data['image']=$image;
		unset($data['old_image']);
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('testimonials',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Testimonial Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'testimonials',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Testimonial Successfully Updated.');
		}
		redirect(base_url().'testimonial/view_testimonial');
		exit;    
	}
	
	
	public function view_testimonial()
	{
		$result['result']=$this->db->order_by('id','desc')->get('testimonials')->result_array();
		$this->load->view('header');
		$this->load->view('Testimonial/view_testimonial',$result);
		$this->load->view('footer');
	}

	public function delete_testimonial($sid)
	{
	$res = $this->db->where('id',$sid)->get('testimonials')->row_array();
	unlink("images/testimonial/".$res['image']);
	$this->Common_Model->deleteData('id',$sid,'testimonials');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Testimonial Successfully Deleted.');
	redirect(base_url().'testimonial/view_testimonial');
	exit;    
	}
	
	public function edit_testimonial($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','testimonials',$where);	   
		$this->load->view('header');
		$this->load->view('Testimonial/add_testimonial',$data);
		$this->load->view('footer');
	}


		
}
?>
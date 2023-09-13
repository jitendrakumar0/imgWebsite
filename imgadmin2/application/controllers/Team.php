<?php
class Team extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_team()
	{ 
		$this->load->view('header');
		$this->load->view('Team/add_team');
		$this->load->view('footer');
	}

	function teamsubmit()
	{		
	$data=$this->input->post();
	$color_image=$this->input->post('color_old_image');
	$image=$this->input->post('old_image');
		if(isset($_FILES['image']['name'])){
		if($_FILES['image']['name'] !=""){
			$ran_no = rand(100000,999999);
			$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
			$this->load->library('upload');
			$config['upload_path']   = './images/team';
			$config['allowed_types'] = 'jpg|jpeg|gif|png|webp';
			$config['max_size']      = 0;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$this->upload->initialize($config); 
			if (!$this->upload->do_upload('image'))
				{
					$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
                    redirect(base_url().'team/view_team');
				    exit; 					
				}
				else
				{					
				$upload_data = $this->upload->data();
				$image = $upload_data['file_name'];
				unlink("images/team/".$data['old_image']);
				}
				if (!$this->upload->do_upload('color_image'))
				{
					$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
                    redirect(base_url().'team/view_team');
				    exit; 					
				}
				else
				{					
				$upload_data = $this->upload->data();
				$color_image = $upload_data['file_name'];
				unlink("images/team/".$data['color_old_image']);
				}
			
		}
	}
	$cat = $this->input->post('category');
	$data['category']=implode(',',$cat);

		$data['color_image']=$color_image;
		unset($data['color_old_image']);
		$data['image']=$image;
		unset($data['old_image']);
		if($data['id']=='')
		{
			unset($data['id']);
			
			$this->Common_Model->insertData('team',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Team Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'team',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Team Successfully Updated.');
		}
		redirect(base_url().'team/view_team');
		exit;    
	}
	
	
	public function view_team()
	{
		$result['result']=$this->Common_Model->getAllResult('','team',array());
		$this->load->view('header');
		$this->load->view('Team/view_team',$result);
		$this->load->view('footer');
	}

	public function delete_team($sid)
	{
	$res = $this->db->where('id',$sid)->get('team')->row_array();
	unlink("images/team/".$res['image']);
	unlink("images/team/".$res['color_image']);
	$this->Common_Model->deleteData('id',$sid,'team');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Team Successfully Deleted.');
	redirect(base_url().'team/view_team');
	exit;    
	}
	
	public function edit_team($sid)
	{	
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','team',$where);	   
		$this->load->view('header');
		$this->load->view('Team/add_team',$data);
		$this->load->view('footer');
	}
	
	public function team(){
		header('Access-Control-Allow-Origin: *');  
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');
		$root = "http://".$_SERVER['HTTP_HOST'];
		   $root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
		$input = json_decode($this->input->raw_input_stream,TRUE);
		$input = $this->db->get('team')->result_array();
		if(!empty($input)){
		$json['error']='0';
		$json['msg']='Team fetch successful.';
			 
			   foreach($input as $result1)
			   { $cat = explode(',',$result1['category']);
				 $json['result'][]=array(
				 'category'=>$cat,        
				'name'=>$result1['name'],
				'designation'=>$result1['designation'],      
				'color_image' => $root.'assets/uploads/image/'.$result1['color_image'],
				'image' => $root.'assets/uploads/image/'.$result1['image']        
				);
			   }
		}else{
		$json['error']='1';
		$json['msg']="Data Not found.";
		}

		$jsonFinal[]=$json;
		echo json_encode($jsonFinal);
		die;
		}
	
	

		
}
?>
<?php
class Sitemap extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 


	public function add_sitemap()
	{ 
		$this->load->view('header');
		$this->load->view('Sitemap/add_sitemap');
		$this->load->view('footer');
	}

	function sitemapsubmit()
	{		
		$id=$this->input->post('id');
		$url=$this->input->post('url');
		$datee = date('Y-m-d');
		$data = array(
		'loc' => $url,
		'lastmod' => $datee,
		'changefreq' => 'weekly',
		'priority' => '0.5',
		);
	
		if($id=='')
		{
			unset($id);
			
			$this->Common_Model->insertData('sitemap',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Sitemap Url Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('sitemap_id',$id,'sitemap',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Sitemap Url Successfully Updated.');
		}
		redirect(base_url().'sitemap/view_sitemap');
		exit;    
	}
	
	
	public function view_sitemap()
	{
		$result['result']=$this->db->order_by('sitemap_id','Desc')->get('sitemap')->result_array();
		$this->load->view('header');
		$this->load->view('Sitemap/view_sitemap',$result);
		$this->load->view('footer');
	}

	public function delete_sitemap($sid)
	{
	$this->Common_Model->deleteData('sitemap_id',$sid,'sitemap');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Sitemap Url Successfully Deleted.');
	redirect(base_url().'sitemap/view_sitemap');
	exit;    
	}
	
	public function edit_sitemap($sid)
	{	
		$where = array('sitemap_id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','sitemap',$where);	   
		$this->load->view('header');
		$this->load->view('Sitemap/add_sitemap',$data);
		$this->load->view('footer');
	}


	function sitemap_status()
	{
	//	echo"hii"; die;
		$sid = $_GET['vopll'];
		$table = $_GET['table'];
		$value = $_GET['value'];
			$this->db->where('sitemap_id',$sid)->update($table,array('status'=>$value));
		die;
	}


   
		
}
?>
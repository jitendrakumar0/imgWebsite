<?php
class Footer extends Admin
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');
	}


	public function add_footer()
	{
		// $this->load->view('header');
		// $data['result'] = $this->Common_Model->getAllResult('', 'pageurl', array());
		// $this->load->view('Footer/add_footer', $data);
		// $this->load->view('footer');

		$where = array('id' => 1);
		$data['result1'] = $this->Common_Model->getRowResult('', 'footer', $where);
		$data['result'] = $this->Common_Model->getAllResult('', 'pageurl', array());
		$this->load->view('header');
		$this->load->view('Footer/add_footer', $data);
		$this->load->view('footer');
	}

	function footersubmit()
	{
		$data = $this->input->post();
		$data['address'] = implode('$#', $this->input->post('address'));
		$data['quicklinks'] = implode(',', $this->input->post('quicklinks'));
		$data['exclusiveservice'] = implode(',', $this->input->post('exclusiveservice'));
		$data['ontrending'] = implode(',', $this->input->post('ontrending'));
		$data['otherunits'] = implode(',', $this->input->post('otherunits'));
		$data['categories'] = implode(',', $this->input->post('categories'));
		if ($data['id'] == '') {
			unset($data['id']);
			$this->Common_Model->insertData('footer', $data);
			$this->session->set_flashdata('digitalcashadminmessageTrue', 'Footer Successfully Added.');
		} else {
			$this->Common_Model->updateData('id', $data['id'], 'footer', $data);
			$this->session->set_flashdata('digitalcashadminmessageTrue', 'Footer Successfully Updated.');
		}
		redirect(base_url() . 'footer/add_footer');
		exit;
	}

	public function edit_footer($sid)
	{
		$where = array('id' => $sid);
		$data['result1'] = $this->Common_Model->getRowResult('', 'footer', $where);
		$data['result'] = $this->Common_Model->getAllResult('', 'pageurl', array());
		$this->load->view('header');
		$this->load->view('Footer/add_footer', $data);
		$this->load->view('footer');
	}


	function change_status()
	{
		//	echo"hii"; die;
		$sid = $_GET['vopll'];
		$table = $_GET['table'];
		$value = $_GET['value'];
		$this->db->where('id', $sid)->update($table, array('status' => $value));
		die;
	}

	public function add_footerurl()
	{
		$this->load->view('header');
		$this->load->view('Footer/add_footerurl');
		$this->load->view('footer');

		// $where = array('id' => 1);
		// $data['result'] = $this->Common_Model->getRowResult('', 'pageurl', $where);
		// $this->load->view('header');
		// $this->load->view('Footer/add_footerurl', $data);
		// $this->load->view('footer');
	}

	function footerurlsubmit()
	{
		$data = $this->input->post();
		if ($data['id'] == '') {
			unset($data['id']);

			$this->Common_Model->insertData('pageurl', $data);
			$this->session->set_flashdata('digitalcashadminmessageTrue', 'Page Url Successfully Added.');
		} else {
			$this->Common_Model->updateData('id', $data['id'], 'pageurl', $data);
			$this->session->set_flashdata('digitalcashadminmessageTrue', 'Page Url Successfully Updated.');
		}
		redirect(base_url() . 'footer/add_footerurl');
		exit;
	}

	public function edit_footerurl($sid)
	{
		$where = array('id' => $sid);
		$data['result'] = $this->Common_Model->getRowResult('', 'pageurl', $where);
		$this->load->view('header');
		$this->load->view('Footer/add_footerurl', $data);
		$this->load->view('footer');
	}

	public function view_footerurl()
    {
        $result['result'] = $this->Common_Model->getAllResult('', 'pageurl', array());
        $this->load->view('header');
        $this->load->view('Footer/view_footerurl', $result);
        $this->load->view('footer');
    }


	function change_statusurl()
	{
		//	echo"hii"; die;
		$sid = $_GET['vopll'];
		$table = $_GET['table'];
		$value = $_GET['value'];
		$this->db->where('id', $sid)->update($table, array('status' => $value));
		die;
	}

	public function add_socialmedia()
	{
		// $this->load->view('header');
		// $this->load->view('Footer/add_socialmedia');
		// $this->load->view('footer');

		$where = array('id' => 1);
		$data['result'] = $this->Common_Model->getRowResult('', 'socialmedia', $where);
		$this->load->view('header');
		$this->load->view('Footer/add_socialmedia', $data);
		$this->load->view('footer');
	}

	function socialmediasubmit()
	{
		$data = $this->input->post();
		if ($data['id'] == '') {
			unset($data['id']);

			$this->Common_Model->insertData('socialmedia', $data);
			$this->session->set_flashdata('digitalcashadminmessageTrue', 'Page Url Successfully Added.');
		} else {
			$this->Common_Model->updateData('id', $data['id'], 'socialmedia', $data);
			$this->session->set_flashdata('digitalcashadminmessageTrue', 'Page Url Successfully Updated.');
		}
		redirect(base_url() . 'footer/add_socialmedia');
		exit;
	}


	public function edit_socialmedia($sid)
	{
		$where = array('id' => $sid);
		$data['result'] = $this->Common_Model->getRowResult('', 'socialmedia', $where);
		$this->load->view('header');
		$this->load->view('Footer/add_socialmedia', $data);
		$this->load->view('footer');
	}


	function change_statussocialmedia()
	{
		//	echo"hii"; die;
		$sid = $_GET['vopll'];
		$table = $_GET['table'];
		$value = $_GET['value'];
		$this->db->where('id', $sid)->update($table, array('status' => $value));
		die;
	}
}

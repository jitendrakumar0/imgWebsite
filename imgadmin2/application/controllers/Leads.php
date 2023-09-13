<?php
class Leads extends Admin {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('query');
        $this->load->model('Form_model');
        $this->load->model('Common_Model');
        $this->load->library('form_validation');   
    } 
	
	
	public function add_leads(){
       
		$header['title']="Add Leads";
        $this->load->view('header',$header);
        $this->load->view('Leads/add_leads');
        $this->load->view('footer');
    }
	
	public function leadssubmit(){
		$insertData = array( 
			'name' => $_POST['contactname'],
			'email' => $_POST['contactemail'],
			'mobile' => $_POST['contactnumber'],
			'requirement' => $_POST['requirement'],
			'organization' => $_POST['organization'],
			'message' => $_POST['contactmessage'],
			'added_by'=>$this->session->userdata('store100mlmadmin')
	     );
		 
		 $this->db->insert('contact',$insertData);
		 
		 $last_id = $this->db->insert_id();
		 
		 $leads_data = array(
		    'name' => $_POST['contactname'],
			'email' => $_POST['contactemail'],
			'mobile' => $_POST['contactnumber'],
			'type' => 'Contact',
			'type_id' => $last_id
		 );
		 
		 $this->db->insert('leads',$leads_data);
		 $this->session->set_flashdata('digitalcashadminmessageTrue', 'Lead Successfully Added.');   
         redirect(base_url().'leads/view_leads');
         exit;	 
	}
    
    public function view_leads(){
        $status=0; 
        $result['status']=$status;
		$cond="date(followup_date)<='".date('Y-m-d')."' and status='3'";
		$pendingCond="status='0'";
		if($this->session->userdata('store100type')=='lead_user'){
			$cond.=" and assign_to='".$this->session->userdata('store100mlmadmin')."'";
			$pendingCond.=" and status='0' and assign_to='".$this->session->userdata('store100mlmadmin')."'";
		}
		
        $result['result']=$this->db->order_by('id','DESC')->get_where('leads',$cond)->result_array();   
        $result['pending_result']=$this->db->order_by('id','DESC')->get_where('leads',$pendingCond)->result_array(); 
		$header['title']="View Leads";
        $this->load->view('header',$header);
        $this->load->view('Leads/view_leads',$result);
        $this->load->view('footer');
    } 
	
    public function viewAllReject(){ 
		$cond="status='4'"; 
		if($this->session->userdata('store100type')=='lead_user'){
			$cond.=" and assign_to='".$this->session->userdata('store100mlmadmin')."'"; 
		}
        $result['result']=$this->db->order_by('id','DESC')->get_where('leads',$cond)->result_array(); 
		$header['title']="View All Reject Leads";
        $this->load->view('header',$header);		
        $this->load->view('Leads/view_reject_leads',$result);
        $this->load->view('footer');
    }

    public function viewAllUpcoming(){ 
		$cond="date(followup_date) >'".date('Y-m-d')."'"; 
		if($this->session->userdata('store100type')=='lead_user'){
			$cond.=" and assign_to='".$this->session->userdata('store100mlmadmin')."'"; 
		}
        $result['result']=$this->db->order_by('id','DESC')->get_where('leads',$cond)->result_array();       
		$header['title']="View All Upcoming Leads";
        $this->load->view('header',$header);		
        $this->load->view('Leads/view_all_upcoming_leads',$result);
        $this->load->view('footer');
    }
	
    public function viewAllApprove(){
		$cond="status='2'"; 
		if($this->session->userdata('store100type')=='lead_user'){
			$cond.=" and assign_to='".$this->session->userdata('store100mlmadmin')."'"; 
		}
        $result['result']=$this->db->order_by('id','DESC')->get_where('leads',$cond)->result_array();    
        $header['title']="View All Approve Leads";
        $this->load->view('header',$header);
        $this->load->view('Leads/view_approve_leads',$result);
        $this->load->view('footer');
    }  

    public function viewleadspage($sid)
    {   
        $data['res'] = $this->db->where('lead_id', $sid)->get('lead_remark')->result_array();

        $where = array('id'=> $sid);    
        $data['result'] = $this->Common_Model->getRowResult('','leads',$where);    

        $this->load->view('header');
        $this->load->view('Leads/viewleadspage',$data);
        $this->load->view('footer');
    }

    public function change_status($sid){
		$status = $this->input->post('status');
		$followup_date = date('Y-m-d',strtotime($this->input->post('followup_date')));
 
		 $remark = $this->input->post('remark');
		 $lead_id = $this->db->where('id',$sid)->get('leads')->row_array();
		 $data =array(
			'status' => $status,
			'followup_date' => $followup_date
			);
			 $data1 =array(
			'remark' => $remark,
			'lead_id' => $lead_id['id'],
			);
		 $this->db->where('id',$sid)->update('leads',$data);
		 $this->db->insert('lead_remark',$data1);
		 $this->session->set_flashdata('digitalcashadminmessageTrue', 'Successfully Updated.');
    
         redirect(base_url().'leads/view_leads');
         exit;  
    
	}

  public function reject_lead_request()
  {
	  $reject_reason = $this->input->post('reject_reason');
	  $reject_done = $this->session->userdata('store100mlmadminusername');
	  $id = $this->input->post('uid');
 
	  $data = array(
		  'reject_reason' => $reject_reason,
		  'reject_done' => $reject_done,
		  'status' => '4'
	  );
	  
	  $this->db->where('id',$id)->update('leads',$data);
	  $this->session->set_flashdata('digitalcashadminmessageTrue', 'Lead Rejected Successfully');  
      redirect(base_url().'leads/view_leads');
      exit;
	  
  }

  public function delete_lead_request($sid)
	{
		$res = $this->db->where('id',$sid)->get('leads')->row_array();	
		$this->Common_Model->deleteData('id',$sid,'leads');
		if ($res['type'] =='Contact') {
			$this->Common_Model->deleteData('id',$res['type_id'],'contact');	
		} elseif ($res['type'] =='Request Quote') {
			$this->Common_Model->deleteData('id',$res['type_id'],'request_quote');
		} elseif ($res['type'] =='Request For Demo') {
			$this->Common_Model->deleteData('id',$res['type_id'],'request_demo');
		} elseif ($res['type'] =='Offshore') {
			$this->Common_Model->deleteData('id',$res['type_id'],'offshore');
		} elseif ($res['type'] =='Order') {
			$this->Common_Model->deleteData('id',$res['type_id'],'order_detail');
		} elseif ($res['type'] =='Digital Marketing') {
			$this->Common_Model->deleteData('id',$res['type_id'],'digital_enquiary');
		} else{
			redirect(base_url().'leads/view_leads');
	}
	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Lead Successfully Deleted.');
	redirect(base_url().'leads/view_leads');
	exit;    
	}
  
    public function accept_lead_request()
  {
	  $accept_reason = $this->input->post('accept_reason');
	  $accept_done = $this->session->userdata('store100mlmadminusername');
	  $id = $this->input->post('aid');
	  
	  $data = array(
	  'accept_description' => $accept_reason,
	  'accept_done' => $accept_done,
	  'status' => '2',
	   'accept_date'=>date('Y-m-d H:i:s')
	  );
	  
	  $this->db->where('id',$id)->update('leads',$data);
	  $this->session->set_flashdata('digitalcashadminmessageTrue', 'Lead Accepted Successfully');  
      redirect(base_url().'leads/view_leads');
      exit;	  
  }

  public function assign_to()
  {
	  $assign_to = $this->input->post('assign_to');	  
	  $follow_date = $this->input->post('follow_date');
	  $follow_remark = $this->input->post('follow_remark');	
	  $id = $this->input->post('asid');

	  $new_date = explode('/',$follow_date);
	  $follow_date = $new_date['2'].'-'.$new_date['0'].'-'.$new_date['1'];
	  
		$data = array(
		  'assign_to' => $assign_to,
		  'followup_date' => $follow_date,
		  'follow_remark' => $follow_remark,
		  'follow_done'=>$this->session->userdata('store100mlmadminusername'),
		  'status' => '3',  		  
		);
		
		$lead_data = array(
			'lead_id' => $id,
			'remark' => $follow_remark,
			'done_by'=>$this->session->userdata('store100mlmadminusername')
		);

		$this->db->insert('lead_remark',$lead_data);
	  
	  $this->db->where('id',$id)->update('leads',$data);
	  $this->session->set_flashdata('digitalcashadminmessageTrue', 'Lead assign Successfully');  
      redirect(base_url().'leads/view_leads');
      exit;	  
  }
  
  
  public function follow_up_request()
  {
	  $follow_date = $this->input->post('follow_date');
	  $follow_remark = $this->input->post('follow_remark');
	  $follow_contact = $this->input->post('alternate_contactno');
	  $contact_type = $this->input->post('contact_type');
	  $follow_done = $this->session->userdata('store100mlmadminusername');
	  $id = $this->input->post('fid');
	  
	  $new_date = explode('/',$follow_date);
	  $follow_date = $new_date['2'].'-'.$new_date['0'].'-'.$new_date['1'];

	  
	  $data = array(
		  'followup_date' => $follow_date,
		  'follow_remark' => $follow_remark,
		  'follow_done' => $follow_done,
		  'status' => '3',
		  'alternate_contactno'=> $follow_contact,
		  'alternate_type' => $contact_type
	  );

	  $this->db->where('id',$id)->update('leads',$data); 
	  
	  $lead_data = array(
		  'lead_id' => $id,
		  'remark' => $follow_remark,
		  'done_by'=>$follow_done
	  );
	  
	  $this->db->insert('lead_remark',$lead_data);
	  
	  $this->session->set_flashdata('digitalcashadminmessageTrue', 'Lead Accepted Successfully');  
      redirect(base_url().'leads/view_leads');
      exit;
  }
  
  
    public function view_lead_data()
  {
	  $sid = $this->input->post('lid');
	  
	  $res = $this->db->where('lead_id', $sid)->get('lead_remark')->result_array();
	  $where = array('id'=> $sid);    
	  $result = $this->Common_Model->getRowResult('','leads',$where);
	  
	  ?>
	  
	     <?php $i= 1; 
			if(empty($res)){ ?> 
			<div class="col-md-12" style="padding:0px;">
				<div class="tetst" style="margin-bottom:15px;">
				   <?php echo "No Remark Available at this time"; ?>
				</div>    
			</div>
		  <?php } else { 
			foreach($res as $res){
		  ?>                                  
				<div class="tetst" style="margin-bottom:15px;">
					<p>FollowUp Date : <span><?php echo date('Y-m-d', strtotime($res['created_date'])); ?></span></p>
					<p>Remark : <span><?php echo $res['remark']; ?></span></p>
					<p>Done By : <span><?php echo $res['done_by']; ?></span></p>
				   <?php if($i < $total){ ?>
					<hr> 
					<?php } ?>     
				</div>	
	     <?php } }?>
				
	<?php
	  	  
  }
  

        
}
?>
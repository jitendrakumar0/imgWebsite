<?php
class Tax extends Admin {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('query');
        $this->load->model('Form_model');
        $this->load->model('Common_Model');
        $this->load->library('form_validation');   
    } 
    
    
    public function add_tax(){
        $result['result']=$this->Common_Model->getAllResult('','tax',array());
       $this->db->from('paidtax');
      $query = $this->db->get();
      $tax_data['data'] = $query->result();
      $paid_tax =0;
      foreach ($tax_data['data'] as $value) {
            $paid_tax = $paid_tax + $value->amount;
           }

       $data['paid'] = $paid_tax;
        $totalamount = 0;
        $count = 0;
        $gst_amount = 0;
        $after_gst = 0;
        foreach ($result['result'] as $value) {
            $count++;
            $totalamount = $totalamount + $value['amount'];
            $x = ($value['amount'] * 100)/118;
            $gst_amount = round(($gst_amount + ($value['amount'] - $x)),2);
            $after_gst = round(($after_gst + $x),2);
        }
        $data['count'] = $count;
        $data['totalamount'] = $totalamount;
        $data['gst_amount'] = $gst_amount;
        $data['after_gst'] = $after_gst;
        $header['title']="Add Tax";
        $this->load->view('header',$header);
        $this->load->view('Tax/add_tax',$data);
        $this->load->view('footer');
    }

    public function taxsubmit(){
        $insertData = array( 
            'amount' => $_POST['amount'],
            'name' => $_POST['name']
         );
         
         $this->db->insert('tax',$insertData);
         
         $this->session->set_flashdata('digitalcashadminmessageTrue', 'Tax Successfully Added.');   
         redirect(base_url().'tax/view_tax');
         exit;   
    }

    public function taxpaidsubmit(){
        $insertData = array( 
            'amount' => $_POST['amount'],
            'month' => $_POST['month'],
            'year' => $_POST['year']
         );
         
         $this->db->insert('paidtax',$insertData);
         
         $this->session->set_flashdata('digitalcashadminmessageTrue', 'Tax Successfully Added.');   
         redirect(base_url().'tax/view_paidtax');
         exit;  
    }

    public function paidtax(){
         $result['result']=$this->Common_Model->getAllResult('','tax',array());
         $this->db->from('paidtax');
      $query = $this->db->get();
      $tax_data['data'] = $query->result();
      $paid_tax =0;
      foreach ($tax_data['data'] as $value) {
            $paid_tax = $paid_tax + $value->amount;
           }
       $data['paid'] = $paid_tax;
        $totalamount = 0;
        $count = 0;
        $gst_amount = 0;
        $after_gst = 0;
        foreach ($result['result'] as $value) {
            $count++;
            $totalamount = $totalamount + $value['amount'];
            $x = ($value['amount'] * 100)/118;
            $gst_amount = round(($gst_amount + ($value['amount'] - $x)),2);
            $after_gst = round(($after_gst + $x),2);
        }
        $data['count'] = $count;
        $data['totalamount'] = $totalamount;
        $data['gst_amount'] = $gst_amount;
        $data['after_gst'] = $after_gst;
        $header['title']="Add Paid Tax";
       $this->load->view('header',$header);
        $this->load->view('Tax/add_paidtax',$data);
        $this->load->view('footer');
    }

    public function view_paidtax(){
        $this->db->from('paidtax');
          $query = $this->db->get();
          $data['data'] = $query->result();
           $this->load->view('header',$header);
        $this->load->view('Tax/view_paidtax',$data);
        $this->load->view('footer');
    }

    public function view_tax(){
        //$data['data']=$this->Common_Model->getAllResult('','tax',array());
        $this->db->select('*');
        if($_GET['start_date']){
            $start_date = $_GET['start_date'];
            if($start_date!=""){
                $this->db->where('created_at >=',date('Y-m-d',strtotime($start_date)));
            }
            // search for the end date //
            if($_GET['end_date']){
                $end_date = $_GET['end_date'];
                if($end_date == $start_date){
                  $this->db->where('created_at <=',date('Y-m-d',strtotime($end_date)));
                }
            }
        }
        if($_GET['end_date']){
            $end_date = $_GET['end_date'];
            if($end_date!=""){
                $this->db->where('created_at <=',date('Y-m-d',strtotime($end_date)));
            }
        }
        if(($_GET['start_date']) || ($_GET['end_date'])){
          $this->db->from('tax');
          $query = $this->db->get();
          $data['data'] = $query->result();
        }else{ 
          $this->db->from('tax');
          $this->db->where('MONTH(created_at)', date('m'));
          $query = $this->db->get();
          $data['data'] = $query->result();
        }
      

        $totalamount = 0;
        $count = 0;
        $gst_amount = 0;
        $after_gst = 0;
        foreach ($data['data'] as $value) {
            $count++;
            $totalamount = $totalamount + $value->amount;
            $x = ($value->amount * 100)/118;
            $gst_amount = round(($gst_amount + ($value->amount - $x)),2);
            $after_gst = round(($after_gst + $x),2);
        }
        $data['count'] = $count;
        $data['totalamount'] = $totalamount;
        $data['gst_amount'] = $gst_amount;
        $data['after_gst'] = $after_gst;
        $header['title']="View Tax";
        $this->load->view('header',$header);
        $this->load->view('Tax/view_tax',$data);
        $this->load->view('footer');
    }
    public function delete_tax($sid)
    {
        $res = $this->db->where('id',$sid)->get('tax')->row_array();    
        $this->Common_Model->deleteData('id',$sid,'tax');
    
    $this->session->set_flashdata('digitalcashadminmessageTrue','Tax Successfully Deleted.');
    redirect(base_url().'tax/view_tax');
    exit;    
    }

}
?>
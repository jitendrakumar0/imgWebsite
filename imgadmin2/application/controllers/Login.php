<?php
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->helper('query');
        $this->load->database();
        $this->load->model("Common_Model");
    }
    public function index() {
        $root = root();
        if($this->session->userdata('store100mlmadmin')){
			header("location:".$root."dashboard");
        }else{
			$data['title']="IMG Global Infotech PVT. LTD.| Admin Login";
            $this->load->view('login',$data);
        }
    }
	
    public function AdminLoginEnd() {
		 
		$root=root();
		$data = array(
			'username' =>$this->input->post('username'),
			'password' =>$this->input->post('password'),
		);
		$result=$this
					->db
					->where('username', $this->input->post('username'))
					->get('users')
					->result();
		if(empty($result)){
			 $Json['status']="0";
			 $Json['msg']="Invalid username";
		}
		else{
			
			foreach($result as $key=>$value){}
			$authenticatePassword = password_verify($data['password'], $value->password);
			if($authenticatePassword){
			$Json['status']="1";
			$Json['type']=$value->type;
			$Json['msg']="Login successfully";                
			$this->session->set_userdata('store100mlmadminusername',$value->username);
			$this->session->set_userdata('store100mlmadmin',$value->id);
			$this->session->set_userdata('store100type',$value->type);
		}else{
			$Json['status']="0";
			 $Json['msg']="Invalid password";
		}
		

		} 
		$final_result=json_encode($Json);
		echo $final_result;             
		die;
	}
	  
	public function changeusername(){ 
		if($this->session->userdata('store100mlmadmin')){
			$data['title']='Admin Change Username';
			$this->load->view('header',$data);
			$this->load->view('change_username');
			$this->load->view('footer');
		}else{
			header("location: ".root());
			die;
		}
    }
	  
	  public function usernamechangeEnd(){
		  
		if($this->session->userdata('store100mlmadmin')){
			$root = root(); 
			   $data=array(
					'username'=>$this->input->post('username'),
				);
			shweta_popular('users',$data,'id','1');
			$json['status']='1';
			$json['admin_name']=ucfirst($data['username']);
			$final_result=json_encode($json);
			echo $final_result;
			die;
		}else{
			header("location: ".root());
			die;
		}
    } 
	  
	  public function changepassword(){
		if($this->session->userdata('store100mlmadmin')){
			$data['title']='Admin Change Password';
			$this->load->view('header',$data);
			$this->load->view('change_password');
			$this->load->view('footer');
		}else{
			header("location: ".root());
			die;
		}
    }  
	  
	public function Passwordchangeend(){
		if($this->session->userdata('store100mlmadmin')){
			$root = root();
			$adminid=$this->session->userdata('store100mlmadmin');
			$oldpassword=$this->input->post('o_pass');
			$newpassword=$this->input->post('n_pass');
			$confirmpassword=$this->input->post('c_pass');
			$data=array(
				'password'=>password_hash($newpassword, PASSWORD_DEFAULT),
			);
		$result=$this
			->db
			->where('id', $this->session->userdata('store100mlmadmin'))
			->get('users')
			->result();
		if(empty($result)){
			 $Json['status']="0";
			 $Json['msg']="Invalid username";
		}
		else{
			foreach($result as $key=>$value){}
			$authenticatePassword = password_verify($oldpassword, $value->password);
			if($authenticatePassword){
			shweta_popular('users',$data,'id',$adminid);
			$json['status']="1";
			$json['msg']="Password Changed Successfully"; 
		}else{
			$json['status']="1";
					$json['msg']="Password not matched";
		}
		} 
			$final_result=json_encode($json);
			echo $final_result;
			die;
		}else{
			header("location: ".root());
			die;
		}
    } 
	  
	 public function logout() {  
        $this->session->unset_userdata('store100mlmadmin');
        header("location: ".root());
        die;
    } 
}
?>

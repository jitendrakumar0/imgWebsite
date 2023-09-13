<?php

class Common_Model extends CI_Model{

public function __construct() {
parent::__construct();
$this->load->database();
$this->load->library('session');
}

public function get_result($data,$tablename){
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result();
	}

function getRowResultLimitOrderBy($field,$table_name,$cond,$ordercol,$order_by,$limit)
{
$database=$this->load->database('default', true);
$result=$database->select($field)->order_by($ordercol,$order_by)->limit($limit)->get_where($table_name,$cond)->result_array();
$database->close();
return $result;
}

function getAllResultOrderByCol($field,$table_name,$cond,$orderCol,$orderType)
{
$database=$this->load->database('default', true);
$result=$database->select($field)->order_by($orderCol,$orderType)->get_where($table_name,$cond)->result_array();
$database->close();
return $result;
}

function getFieldValue($field,$table_name,$cond)
{
$database=$this->load->database('default', true);
$result=$database->select($field)->get_where($table_name,$cond)->row_array();
$database->close();
return $result[$field];
}
 
function getRowResult($field,$table_name,$cond)
{
$database=$this->load->database('default', true);
$result=$database->select($field)->get_where($table_name,$cond)->row_array();
$database->close();
return $result;
}
 
function getAllResult($field,$table_name,$cond)
{
$database=$this->load->database('default', true);
$result=$database->select($field)->order_by("id", "desc")->get_where($table_name,$cond)->result_array();
$database->close();
return $result;
}
 
function getAllResultOrderBy($field,$table_name,$cond,$ordercol,$order_by)
{
$database=$this->load->database('default', true);
$result=$database->select($field)->order_by($ordercol,$order_by)->get_where($table_name,$cond)->result_array();
$database->close();
return $result;
}

function insertData($table_name,$data)
{
$database=$this->load->database('default',true);
$database->insert($table_name,$data);
$id=$database->insert_id();
$database->close();
return $id;
}

function updateData($whrcol,$whrcolVal,$table_name,$data)
{
$database=$this->load->database('default',true);
$database->where($whrcol,$whrcolVal)->update($table_name,$data);
$id=$database->affected_rows();
$database->close();  
return $id;
}

function updateDataCond($table_name,$data,$cond)
{
$database=$this->load->database('default',true);
$database->where($cond)->update($table_name,$data);  
$id=$database->affected_rows();
$database->close();  
return $id;
}

function deleteData($whrcol,$whrcolVal,$table_name){
	$database=$this->load->database('default',true);
	$database->where($whrcol,$whrcolVal)->delete($table_name);
	$database->close();
}

public function getLanguage(){
	date_default_timezone_set('Asia/Kolkata'); 
	if($this->session->userdata('language')!=""){
		$lang=$this->session->userdata('language');
		}else{
			$lang="english";
		}
	$this->lang->load('content',$lang);
		return $lang;
}	

public function show_pagination_filter($limit,$start,$table_name,$condition){
	$data=array();
    $query = order_by_limit_new('*',$table_name,$condition,$limit, $start,'id','DESC');
	if ($query > 0) {
        foreach ($query as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
}

	public function show_pagination_filterBylevydate($limit,$start,$table_name,$condition){
	$data=array();
        $query = order_by_limit_new('*',$table_name,$condition,$limit, $start,'levy_due_date','ASC');
		if ($query > 0) {
            foreach ($query as $row) {
                $data[] = $row;
            } 
            return $data;
        }
        return false;
	}
	
	
	function uploadImage($field,$type,$path){

        $config['upload_path'] = 'images/'.$path;
		$config['file_name']=$type.'-'.strtotime(date('Y-m-d H:i:s'));
        $config['allowed_types'] = '*';
        $config['max_size'] = config_item('max_file_size') * 1024;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            $error = $this->upload->display_errors();
            $type = "error";
            $message = $error;
			$this->session->set_userdata('digitalcashadminmessageFalse',$error);
            return FALSE;
            // uploading failed. $error will holds the errors.
        } else {
            $fdata = $this->upload->data();
            $img_data['name'] = $fdata['file_name'];
            return $img_data;
            // uploading successfull, now do your further actions
        }
    }
	
	function getSingleValidError($errors){
		$error="";
		if(!empty($errors)){
			$errors1=explode('</p>',validation_errors());
			if(isset($errors1[0]) && $errors1[0]!=''){
				$error=str_replace('<p>','',$errors1[0]);
			}
		}
		return $error;
	}
}

?>
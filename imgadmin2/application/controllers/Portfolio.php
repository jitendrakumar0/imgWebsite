<?php
class Portfolio extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('query');
		$this->load->model('Form_model');
		$this->load->model('Common_Model');
		$this->load->library('form_validation');   
	} 

	
    public function add_portfoliocategory()
    {
        $this->load->view('header');
        $this->load->view('Portfolio/add_portfoliocategory');
        $this->load->view('footer');
    }

    public function portfoliocategorysubmit()
    {
        $data = $this->input->post();
        $slug = newslugend($this->input->post('title'));
        $data['slugcategory'] = $slug;

        if ($data['id'] == '') {
            unset($data['id']);

            $this->Common_Model->insertData('portfolio_category', $data);
            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Category Successfully Added.');
        } else {
            $this->Common_Model->updateData('id', $data['id'], 'portfolio_category', $data);
            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Category Successfully Updated.');
        }
        redirect(base_url() . 'portfolio/view_portfoliocategory');
        exit;
    }

    public function view_portfoliocategory()
    {
        $result['result'] = $this->Common_Model->getAllResult('', 'portfolio_category', array());
        $this->load->view('header');
        $this->load->view('Portfolio/view_portfoliocategory', $result);
        $this->load->view('footer');
    }

    public function delete_portfoliocategory($sid)
    {
        $this->Common_Model->deleteData('id', $sid, 'portfolio_category');
        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Category Successfully Deleted.');
        redirect(base_url() . 'portfolio/view_portfoliocategory');
        exit;
    }

    public function edit_portfoliocategory($sid)
    {
        $where = array('id' => $sid);
        $data['result'] = $this->Common_Model->getRowResult('', 'portfolio_category', $where);
        $this->load->view('header');
        $this->load->view('Portfolio/add_portfoliocategory', $data);
        $this->load->view('footer');
    }


	public function add_portfolio()
	{ 
	$data['categories'] = $this->db->get('portfolio_category')->result_array();
	
	$data['res'] = $this->db->where('status','1')->get('technology')->result_array();
	$data['ress'] = $this->db->where('status','1')->get('website_type')->result_array();
		$this->load->view('header');
		$this->load->view('Portfolio/add_portfolio',$data);
		$this->load->view('footer');
	}

	function portfoliosubmit()
	{		
		$data=$this->input->post();
		// print_r($data);
		$single_image=$this->input->post('old_single_image');
		$image=$this->input->post('old_image');
		$logo=$this->input->post('old_logo');
		$section_image=$this->input->post('old_section_image');
		// print_r('test'.$single_image);die;
		// $image = $single_image =$section_image =  $logo = NULL;
		// print_r($this->input->post('section_image'));
		// $image = $this->input->post('old_image');
		if ($this->input->post('logo')) {
			
			// if(isset($_FILES['image']['name'])){
			// if($_FILES['image']['name'] !=""){
				// 	$ran_no = rand(100000,999999);
				// 	$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
				// 	$this->load->library('upload');
				// 	$config['upload_path']   = './images/portfolio';
				// 	$config['allowed_types'] = '*';
				// 	$config['max_size']      = 0;
				// 	$this->load->library('image_lib', $config);
				// 	$this->image_lib->resize();
				// 	$this->upload->initialize($config);

				// 	if (!$this->upload->do_upload('image'))
				// 	{
				// 		$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
				// 		redirect(base_url().'portfolio/view_portfolio');
				// 		exit; 					
				// 	}
				// 	else
				// 	{
				// 		//$this->upload->do_upload('image');
				// 		$upload_data = $this->upload->data();
				// 		$image = $upload_data['file_name'];
				// 		unlink("images/portfolio/".$data['old_image']);
				// 	} 
			// }
			$logo = $this->uploadPortfolioImage($this->input->post('logo'),'portfolio/logo','logo','portfolio\logo',$data,50,1,5);
            $lazy_image = $this->uploadPortfolioImage($this->input->post('logo'),'portfolio/logo/portfolio_lazy','image','portfolio\logo\portfolio_lazy',$data,10,1,3);
		}
        if ($this->input->post('image')) {
			// if(isset($_FILES['image']['name'])){
			// if($_FILES['image']['name'] !=""){
				// 	$ran_no = rand(100000,999999);
				// 	$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
				// 	$this->load->library('upload');
				// 	$config['upload_path']   = './images/portfolio';
				// 	$config['allowed_types'] = '*';
				// 	$config['max_size']      = 0;
				// 	$this->load->library('image_lib', $config);
				// 	$this->image_lib->resize();
				// 	$this->upload->initialize($config);

				// 	if (!$this->upload->do_upload('image'))
				// 	{
				// 		$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
				// 		redirect(base_url().'portfolio/view_portfolio');
				// 		exit; 					
				// 	}
				// 	else
				// 	{
				// 		//$this->upload->do_upload('image');
				// 		$upload_data = $this->upload->data();
				// 		$image = $upload_data['file_name'];
				// 		unlink("images/portfolio/".$data['old_image']);
				// 	} 
			// }
			$image = $this->uploadPortfolioImage($this->input->post('image'),'portfolio','image','portfolio',$data,100,1,1);
            $thum_image = $this->uploadPortfolioImage($this->input->post('image'),'portfolio/portfolio_thumb','image','portfolio\portfolio_thumb',$data,80,1,1);
            $thum_image2 = $this->uploadPortfolioImage($this->input->post('image'),'portfolio/portfolio_thumb2','image','portfolio\portfolio_thumb2',$data,50,1,2);
            $lazy_image = $this->uploadPortfolioImage($this->input->post('image'),'portfolio/portfolio_lazy','image','portfolio\portfolio_lazy',$data,10,1,3);
		}
		if ($this->input->post('single_image')) {
			// if(isset($_FILES['single_image']['name'])){
			// if($_FILES['single_image']['name']!=""){

				// 	$ran_no = rand(100000,999999);
				// 	$config['file_name']=newslugend($this->input->post('name').'-'.$ran_no);
				// 	$this->load->library('upload');
				// 	$config['upload_path']   = './images/portfolio/single';
				// 	$config['allowed_types'] = '*';
				// 	$config['max_size']      = 0;
				// 	$this->load->library('image_lib', $config);
				// 	$this->image_lib->resize();
				// 	$this->upload->initialize($config);

				// 	if (!$this->upload->do_upload('single_image'))
				// 		{
				// 			$this->session->set_flashdata('digitalcashadminmessageFalse','image is not in proper format.Please try again.');
				// 			redirect(base_url().'portfolio/view_portfolio');
				// 			exit; 					
				// 		}
				// 		else
				// 		{
				// 			//$this->upload->do_upload('image');
				// 			$upload_data = $this->upload->data();
				// 			$single_image = $upload_data['file_name'];
				// 			unlink("images/portfolio/single/".$data['single_image']);
				// 		} 
			// }
			$single_image = $this->uploadPortfolioImage($this->input->post('single_image'),'portfolio/single','single_image','portfolio/single',$data,100,1,4);

            $thum_image = $this->uploadPortfolioImage($this->input->post('single_image'),'portfolio/single/portfolio_thumb','single_image','portfolio/single/portfolio_thumb',$data,80,1,1);

            $thum_image2 = $this->uploadPortfolioImage($this->input->post('single_image'),'portfolio/single/portfolio_thumb2','single_image','portfolio/single/portfolio_thumb2',$data,50,1,2);

            $lazy_image = $this->uploadPortfolioImage($this->input->post('single_image'),'portfolio/single/portfolio_lazy','single_image','portfolio/single/portfolio_lazy',$data,10,1,3);

		}

		if ($this->input->post('section_image')) {

			$section_image = $this->uploadPortfolioImage($this->input->post('section_image'),'portfolio/section','section_image','portfolio/section',$data,100,1,4);

            $sec_thum_image = $this->uploadPortfolioImage($this->input->post('section_image'),'portfolio/section/portfolio_thumb','section_image','portfolio/section/portfolio_thumb',$data,80,1,1);

            $sec_thum_image2 = $this->uploadPortfolioImage($this->input->post('section_image'),'portfolio/section/portfolio_thumb2','section_image','portfolio/section/portfolio_thumb2',$data,50,1,2);

            $sec_lazy_image = $this->uploadPortfolioImage($this->input->post('section_image'),'portfolio/section/portfolio_lazy','section_image','portfolio/section/portfolio_lazy',$data,10,1,3);

		}
	
		$website = $this->input->post('url');
		$tech = implode(',',$this->input->post('tech'));
		$category = implode(',',$this->input->post('category'));
		$slug = newslugend($this->input->post('title'));
		$data['slug']=$slug;
		$data['tech']=$tech;
		$data['category']=$category;
		$data['website']=$website;
		$data['logo']=$logo;
		$data['image']=$image;
		unset($data['old_image']);
		$data['single_image']=$single_image;
		unset($data['old_single_image']);
		unset($data['old_logo']);
		$data['section_image']=$section_image;
		unset($data['old_section_image']);
		// print_r($data);die;
		if($data['id']=='')
		{
			unset($data['id']);
			$this->Common_Model->insertData('galleries',$data);
			$this->session->set_flashdata('digitalcashadminmessageTrue','Portfolio Successfully Added.');
		}
		else
		{		
			$this->Common_Model->updateData('id',$data['id'],'galleries',$data);   
			$this->session->set_flashdata('digitalcashadminmessageTrue','Portfolio Successfully Updated.');
		}
		redirect(base_url().'portfolio/view_portfolio');
		exit;    
	} 
	public function uploadPortfolioImage($fileName,$path,$inputName,$compressPath,$data,$percent,$res=0,$wid=0){
        if ($fileName != "") {
			$imgN = 'PortfolioImage' . str_replace(" ","-",$data['title']);
            $imgN1 = preg_replace('/[^A-Za-z0-9\-]/','', $imgN);
            $imageName = preg_replace('/-+/', '-', $imgN1).'.webp';
			$imsrc = base64_decode(explode(',',$fileName)[1]);
			file_put_contents('./images/'.$path .'/'. $imageName, $imsrc);
			$image = $imageName;
                if($res==1){
                    switch ($wid) {
                        case 1:
							// print_r('512');die;
                            $this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$image,512,'');
                            break;
                        case 2:
                            $this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$image,256,'');
                            break;
                        case 3:
                            $this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$image,20,'');
                            break;
						case 4:
							$this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$image,1080,'');
							break;
						case 5:
							$this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$image,100,$inputName);
							break;
                        default:
                            break;
                    }
                }
                
                
                $this->compress_image(MAINPATH.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.$image,$percent);
                // unlink("images/".$path."/" . $data['old_image']);
				// unlink("images/".$path."/" . $data['old_single_image']);
				// unlink("images/".$path."/" . $data['old_section_image']);
                return $image;

        }
    }
	public function compress_image($destination_url, $quality) {
		// echo $destination_url.'<br>';
		$sizeee = filesize($destination_url);
		if($sizeee>100){
			$info = getimagesize($destination_url);
            
			if ($info['mime'] == 'image/jpeg') {
                $image = imagecreatefromjpeg($destination_url);
                @imagejpeg($image, $destination_url, $quality);
            }
			elseif ($info['mime'] == 'image/gif'){
                $image = imagecreatefromgif($destination_url);
                @imagejpeg($image, $destination_url, $quality);
            } 
			elseif ($info['mime'] == 'image/png'){
                // $image = imagecreatefrompng($destination_url);
                
                // imagepng($image, $destination_url, $quality);

                $img  = imagecreatefrompng( $destination_url);
                $new  = imagecreatetruecolor( $info[0],$info[1]);
                imagecopyresampled( $new, $img, 0,0,0,0,$info[0],$info[1],$info[0],$info[1] );
                imagepng($new, null, 100);
            } 
			
		}
		return $destination_url;
	}
    public static function resize_image($destination_url,$wid,$inputName=''){
		$info = getimagesize($destination_url);

		// print_r($info);die;

		if($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/jpg')
		{
			$src = imagecreatefromjpeg($destination_url);
		}
		else if($info['mime'] == 'image/png')
		{
			$src = imagecreatefrompng($destination_url);
		}
		else if($info['mime'] == 'image/webp')
		{
			$src = imagecreatefromwebp($destination_url);
		}
		else
		{
			$src = imagecreatefromgif($destination_url);
		}
		list($width,$height)=getimagesize($destination_url);

		if($inputName!=''){
			if($height>$wid){

				$newheight=100;
				$newwidth=($width/$height)*$newheight;
				$tmp=imagecreatetruecolor($newwidth,$newheight);
				$image = imagecreatetruecolor($newwidth, $newheight);
  
				// Allocate black color to image
				$black = imagecolorallocate($image, 0, 0, 0);
				
				// Make the background transparent
				imagecolortransparent($image, $black);
				imagecopyresized($image,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
				$image_content = imagecreatefromstring( file_get_contents($destination_url) );
				imagewebp($image_content, $destination_url);
				imagejpeg($tmp, $destination_url, 100);
					
				imagepng($image,$destination_url);	
				
				imagedestroy($image);
			}
		}else{
			if($width>$wid){

				$newwidth=$wid;
				$newheight=($height/$width)*$newwidth;
				$tmp=imagecreatetruecolor($newwidth,$newheight);

				$image = imagecreatetruecolor($newwidth, $newheight);
  
				// Allocate black color to image
				$black = imagecolorallocate($image, 0, 0, 0);
				
				// Make the background transparent
				imagecolortransparent($image, $black);
				imagecopyresized($image,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
				$image_content = imagecreatefromstring( file_get_contents($destination_url) );
				imagewebp($image_content, $destination_url);
				imagejpeg($tmp, $destination_url, 100);
					
				imagepng($image,$destination_url);	
				
				imagedestroy($image);

			}
		}

		
		return $destination_url;
	}
	public function view_portfolio()
	{
		$this->db->select('galleries.*,portfolio_category.title as categoryname');    
		$this->db->from('galleries');
		$this->db->join('portfolio_category', 'galleries.category = portfolio_category.id');
		$this->db->order_by('galleries.id','desc');
		$result['result'] = $this->db->get()->result_array();
		// $result['result']=$this->Common_Model->getAllResult('','galleries',array());
		$this->load->view('header');
		$this->load->view('Portfolio/view_portfolio',$result);
		$this->load->view('footer');
	}

	public function delete_portfolio($sid)
	{
	$res = $this->db->where('id',$sid)->get('galleries')->row_array();
	unlink("images/portfolio/".$res['image']);
	unlink("images/portfolio/portfolio_lazy/".$res['image']);
	unlink("images/portfolio/portfolio_thumb/".$res['image']);
	unlink("images/portfolio/portfolio_thumb2/".$res['image']);
	unlink("images/portfolio/single/".$res['single_image']);
	unlink("images/portfolio/single/portfolio_lazy/".$res['single_image']);
	unlink("images/portfolio/single/portfolio_thumb/".$res['single_image']);
	unlink("images/portfolio/single/portfolio_thumb2/".$res['single_image']);
	$this->Common_Model->deleteData('id',$sid,'galleries');	
	$this->session->set_flashdata('digitalcashadminmessageTrue','Portfolio Successfully Deleted.');
	redirect(base_url().'portfolio/view_portfolio');
	exit;    
	}
	
	public function edit_portfolio($sid)
	{

	$data['categories'] = $this->db->get('portfolio_category')->result_array();

	$data['res'] = $this->db->where('status','1')->get('technology')->result_array();
	$data['ress'] = $this->db->where('status','1')->get('website_type')->result_array();
		$where = array('id'=> $sid); 	
		$data['result'] = $this->Common_Model->getRowResult('','galleries',$where);	   
		$this->load->view('header');
		$this->load->view('Portfolio/add_portfolio',$data);
		$this->load->view('footer');
	}


   function newslugend($slug){
    $slug=str_replace("&","and",$slug);
    $text = preg_replace('~[^\\pL\d]+~u', '_', $slug);
    $text = trim($text, '_');  // trim
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);  // transliterate
    $text = strtolower($text);  // lowercase
    $text = preg_replace('~[^-\w]+~', '', $text);  // remove unwanted characters
    $text=str_replace("_","-",$text);
    return $slug=$text;
 }
		
}
?>
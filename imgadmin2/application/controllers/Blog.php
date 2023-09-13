<?php
class Blog extends Admin
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('query');
        $this->load->model('Form_model');
        $this->load->model('Common_Model');
        $this->load->library('form_validation');
    }

    public function add_blogcategory()
    {
        $this->load->view('header');
        $this->load->view('Blog/add_blogcategory');
        $this->load->view('footer');
    }

    public function blogcategorysubmit()
    {
        $data = $this->input->post();
        $slug = newslugend($this->input->post('title'));
        $data['slugcategory'] = $slug;

        if ($data['id'] == '') {
            unset($data['id']);

            $this->Common_Model->insertData('blog_category', $data);
            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Category Successfully Added.');
        } else {
            $this->Common_Model->updateData('id', $data['id'], 'blog_category', $data);
            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Category Successfully Updated.');
        }
        redirect(base_url() . 'blog/view_blogcategory');
        exit;
    }

    public function view_blogcategory()
    {
        $result['result'] = $this->Common_Model->getAllResult('', 'blog_category', array());
        $this->load->view('header');
        $this->load->view('Blog/view_blogcategory', $result);
        $this->load->view('footer');
    }

    public function delete_blogcategory($sid)
    {
        $this->Common_Model->deleteData('id', $sid, 'blog_category');
        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Category Successfully Deleted.');
        redirect(base_url() . 'blog/view_blogcategory');
        exit;
    }

    public function edit_blogcategory($sid)
    {
        $where = array('id' => $sid);
        $data['result'] = $this->Common_Model->getRowResult('', 'blog_category', $where);
        $this->load->view('header');
        $this->load->view('Blog/add_blogcategory', $data);
        $this->load->view('footer');
    }

    public function add_blogtag()
    {
        $this->load->view('header');
        $this->load->view('Blog/add_blogtag');
        $this->load->view('footer');
    }

    public function blogtagsubmit()
    {
        $data = $this->input->post();
        $slug = newslugend($this->input->post('tags'));
        $data['tags_slug'] = $slug;

        if ($data['id'] == '') {
            unset($data['id']);

            $this->Common_Model->insertData('blog_tags', $data);
            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Tag Successfully Added.');
        } else {
            $this->Common_Model->updateData('id', $data['id'], 'blog_tags', $data);
            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Tag Successfully Updated.');
        }
        redirect(base_url() . 'blog/view_blogtag');
        exit;
    }

    public function view_blogtag()
    {
        $result['result'] = $this->Common_Model->getAllResult('', 'blog_tags', array());
        $this->load->view('header');
        $this->load->view('Blog/view_blogtag', $result);
        $this->load->view('footer');
    }

    public function delete_blogtag($sid)
    {
        $this->Common_Model->deleteData('id', $sid, 'blog_tags');
        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Tag Successfully Deleted.');
        redirect(base_url() . 'blog/view_blogtag');
        exit;
    }

    public function edit_blogtag($sid)
    {
        $where = array('id' => $sid);
        $data['result'] = $this->Common_Model->getRowResult('', 'blog_tags', $where);
        $this->load->view('header');
        $this->load->view('Blog/add_blogtag', $data);
        $this->load->view('footer');
    }

    public function newslugend($slug)
    {
        $slug = str_replace("&", "and", $slug);
        $text = preg_replace('~[^\\pL\d]+~u', '_', $slug);
        $text = trim($text, '_'); // trim
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text); // transliterate
        $text = strtolower($text); // lowercase
        $text = preg_replace('~[^-\w]+~', '', $text); // remove unwanted characters
        $text = str_replace("_", "-", $text);
        return $slug = $text;
    }

    public function addBlogAuthor()
    {
        $data['result'] = array();
        $this->load->view('header');
        $this->load->view('Blog/author/add_blog_author', $data);
        $this->load->view('footer');
    }

    public function ViewBlogAuthor()
    {
        $data['result'] = $this->Common_Model->getAllResultOrderBy('*', 'blog_author', array(), 'id', 'DESC');
        $this->load->view('header');
        $this->load->view('Blog/author/view_blog_author', $data);
        $this->load->view('footer');
    }

    public function addBlogAuthorEnd()
    {
        $this->form_validation->set_rules('id', 'Id', 'trim|required|numeric');
        $this->form_validation->set_rules('author_name', 'Author Name', 'trim|required|callback_chkUniqueAuthorName', array(
            'chkUniqueAuthorName' => 'Author name already exist',
        ));
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() == true) {

            if (empty($_FILES)) {
                $this->session->set_userdata('digitalcashadminmessageFalse', 'Image not found.');
                redirect($_SERVER['HTTP_REFERER']);
                exit;
            } else {
                if ($_FILES['author_image']['name'] != '' || (int) $this->input->post('id') == 0) {
                    $image = $this->Common_Model->uploadImage('author_image', 'blogauthor', 'blogauthor');
                    $image = $image['name'];
                } else {
                    $image = $this->input->post('old_author_image');
                }

                if (!$image) {
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $data = array(
                        'author_name' => $this->input->post('author_name'),
                        'description' => $this->input->post('description'),
                        'image' => $image,
                    );

                    if ((int) $this->input->post('id') > 0) {
                        $this->Common_Model->updateData('id', $this->input->post('id'), 'blog_author', $data);
                    } else {
                        $this->Common_Model->insertData('blog_author', $data);
                    }

                    $this->session->set_userdata('digitalcashadminmessageTrue', 'Blog author added successfully.');
                    redirect('blog/author/view_blog_author');
                }
            }
        } else {
            $this->session->set_userdata('digitalcashadminmessageFalse', $this->Common_Model->getSingleValidError(validation_errors()));
            redirect($_SERVER['HTTP_REFERER']);
        }
        exit;
    }

    public function chkUniqueAuthorName($key)
    {
        $result = $this->Common_Model->getRowResult('id', 'blog_author', array('author_name' => $key, 'id !=' => $this->input->post('id')));

        if (empty($result)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateAuthor($id)
    {
        $data['result'] = $this->Common_Model->getRowResult('*', 'blog_author', array('id' => $id));

        if (!empty($data['result'])) {
            $this->load->view('header');
            $this->load->view('Blog/author/add_blog_author', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_userdata('digitalcashadminmessageFalse', 'Something went wrong.please try again.');
            redirect($_SERVER['HTTP_REFERER']);
            exit;
        }
    }

    public function add_blog()
    {
        $data['res'] = $this->db->get('blog_category')->result_array();
        $data['ress'] = $this->db->get('blog_tags')->result_array();
        $data['authors'] = $this->Common_Model->getAllResultOrderBy('id,author_name', 'blog_author', array('status' => '1'), 'author_name', 'ASC');
        $this->load->view('header');
        $this->load->view('Blog/add_blog', $data);
        $this->load->view('footer');
    }

    public function blogsubmit()
    {
        $data = $this->input->post();
        $myArray = explode(';', $data['blog_image']);
        if(!empty($myArray[0])){
            $myArrays = explode('data:image/', $myArray[0]);
            if(!empty($myArrays[1])){
                $supported_image = array(
                    'PNG','eps','raw','cr2','nef','orf','sr2','webp','AVIF','avif','jpg','JPG','jpeg','JPEG','png','bmp','tiff','tif'
                );
                if (in_array($myArrays[1], $supported_image)) {
                $image = $this->input->post('old_image');
                if ($this->input->post('blog_image')) {
            // if (isset($_FILES['blog_image']['name'])) {
            // echo '<pre>';
            // print_r(exif_read_data($_FILES['blog_image']['tmp_name']));die;
            // if ($_FILES['blog_image']['name'] != "") {
                //     $this->load->library('upload');
                //     $config['upload_path'] = './images/blog';
                //     $config['allowed_types'] = '*';
                //     $config['max_size'] = 0;
                //     $this->load->library('image_lib', $config);
                //     $this->image_lib->resize();
                //     $this->upload->initialize($config);
                //     if (!$this->upload->do_upload('blog_image')) {
                //         $this->session->set_flashdata('digitalcashadminmessageFalse', 'image is not in proper format.Please try again.');
                //         redirect(base_url() . 'blog/view_blog');
                //         exit;
                //     } else {
                //         $upload_data = $this->upload->data();
                //         $image = $upload_data['file_name'];
                // 		$this->compress_image(MAINPATH."\blog\blog_thumb\\".$image,20);
                //         unlink("images/blog/" . $data['old_image']);
                // 		// echo BASEPATH;die;
                //     }

            // }
            // echo '<pre>';print_r($this->input->post('blog_image'));die;
            $image = $this->uploadBlogImage($this->input->post('blog_image'),'blog','blog_image','blog',$data,100,1,4);
            $thum_image = $this->uploadBlogImage($this->input->post('blog_image'),'blog/blog_thumb','blog_image','blog/blog_thumb',$data,80,1,1);
            $thum_image2 = $this->uploadBlogImage($this->input->post('blog_image'),'blog/blog_thumb2','blog_image','blog/blog_thumb2',$data,50,1,2);
            $lazy_image = $this->uploadBlogImage($this->input->post('blog_image'),'blog/blog_lazy','blog_image','blog/blog_lazy',$data,10,1,3);
            }
            $data['blog_image'] = $image;
            unset($data['old_image']);

                        
                }
            } else {
                $this->session->set_flashdata('digitalcashadminmessageTrue', 'PLease Add Valid Image Extension.');
                redirect(base_url() . 'blog/add_blog');
                exit;
            }
            
        } else {

            unset($data['blog_image']);
        }

        // print_r($data);die;

        unset($data['old_image']);

        $data['blog_author'] = implode(',', $this->input->post('blog_author'));
        $data['category'] = implode(',', $this->input->post('category'));
        $data['tags_foo'] = implode(',', $this->input->post('tags_foo'));
        if ($data['id'] == '') {
            unset($data['id']);
            $data['status'] = 0;
            $dataa = $this->Common_Model->insertData('blogs', $data);
            
            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Blogs Successfully Added.');
        } else {
            $this->Common_Model->updateData('id', $data['id'], 'blogs', $data);

            $this->session->set_flashdata('digitalcashadminmessageTrue', 'Blogs Successfully Updated.');
        }
        redirect(base_url() . 'blog/view_blog');
        exit;
    }

    public function uploadBlogImage($fileName,$path,$inputName,$compressPath,$data,$percent,$res=0,$wid=0){
        // print_r($data['title']);die;
        if ($fileName != "") {
            // $this->load->library('upload');
            // $config['upload_path'] = './images/'.$path;
            // $config['allowed_types'] = '*';
            // $config['max_size'] = 0;
            // $this->load->library('image_lib', $config);
            // $this->image_lib->resize();
            // $this->upload->initialize($config);
            // if (!$this->upload->do_upload($inputName)) {
            //     $this->session->set_flashdata('digitalcashadminmessageFalse', 'image is not in proper format.Please try again.');
            //     redirect(base_url() . 'blog/view_blog');
            //     exit;
            // } else {
                //==================================================
                    $imgN = 'blog_image' . str_replace(" ","-",$data['title']);
                    $imgN1 = preg_replace('/[^A-Za-z0-9\-]/','', $imgN);
                    // $imageName = preg_replace('/-+/', '-', $imgN1).'.png';
                    $imageName = preg_replace('/-+/', '-', $imgN1).'.webp';
                    $imsrc = base64_decode(explode(',',$fileName)[1]);
                    // print_r('./images/'.$path .'/'. $imageName);
                    file_put_contents('./images/'.$path .'/'. $imageName, $imsrc);
                    // die;
                    $image = $imageName;
                //==================================================
                // $upload_data = $this->upload->data();
                // $image = $upload_data['file_name'];
                if($res==1){
                    switch ($wid) {
                        case 1:
                            $this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.$image,512);
                            break;
                        case 2:
                            $this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.$image,256);
                            break;
                        case 3:
                            $this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.$image,20);
                            break;
                        case 4:
                            $this->resize_image(MAINPATH.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.$image,1080);
                            break;
                        default:
                            break;
                    }
                }
                $this->compress_image(MAINPATH.DIRECTORY_SEPARATOR.$compressPath.DIRECTORY_SEPARATOR.$image,$percent);
                // unlink("images/".$path."/" . $data['old_image']);
                return $image;
                // echo BASEPATH;die;
            // }

        }
    }
    // public function get_resize(){

    // }
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

    public function resizeImage($destination_url,$compressPath,$wid)
    {
        list($width,$height) = getimagesize($destination_url);

        if($width>$wid){
            $width=$wid;
            $height=($height/$width)*$width;
        }
        if($compressPath!='blog'){
            $new_image= 'images/'.$compressPath.'/';
        }else{
            $new_image= 'images/blog/';
        }
        $source_path =  $destination_url;
        
        $this->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_path;
        $config['new_image'] = $new_image;
        $config['create_thumb'] = False;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $width; 
        $config['height']= $height;
        // echo "<pre>";print_r($config);die;
        $this->image_lib->initialize($config);
        if ( ! $this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        }
        return $destination_url;
    }


    public static function resize_image($destination_url,$wid){

        // print_r($destination_url);
        // die;

		$info = getimagesize($destination_url);
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
		if($width>$wid){
			$newwidth=$wid;
			$newheight=($height/$width)*$newwidth;
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			// imagejpeg($tmp,$destination_url,100);
			
            $image_content = imagecreatefromstring( file_get_contents($destination_url) );

            imagewebp($image_content, $destination_url);
            
            // return $newfilename

            imagejpeg($tmp,$destination_url,100);
            
			imagedestroy($src);
			imagedestroy($tmp);
		}
		return $destination_url;;
        // return $webp;
	}

    public function view_blog()
    {
        $result['result'] = $this->Common_Model->getAllResult('', 'blogs', array());
        $this->load->view('header');
        $this->load->view('Blog/view_blog', $result);
        $this->load->view('footer');
    }

    public function delete_blog($sid)
    {
        $res = $this->db->where('id', $sid)->get('blogs')->row_array();
        unlink("images/blog/" . $res['blog_image']);
        unlink("images/blog/blog_lazy/" . $res['blog_image']);
        unlink("images/blog/blog_thumb/" . $res['blog_image']);
        unlink("images/blog/blog_thumb2/" . $res['blog_image']);
        $this->Common_Model->deleteData('id', $sid, 'blogs');
        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Blog Successfully Deleted.');
        redirect(base_url() . 'blog/view_blog');
        exit;
    }

    public function edit_blog($sid)
    {
        $data['res'] = $this->db->get('blog_category')->result_array();
        $data['ress'] = $this->db->get('blog_tags')->result_array();
        $data['authors'] = $this->Common_Model->getAllResultOrderBy('id,author_name', 'blog_author', array('status' => '1'), 'author_name', 'ASC');
        $where = array('id' => $sid);
        $data['result'] = $this->Common_Model->getRowResult('', 'blogs', $where);
        $this->load->view('header');
        $this->load->view('Blog/add_blog', $data);
        $this->load->view('footer');
    }

    public function add_imagelink()
    {
        $this->load->view('header');
        $this->load->view('Blog/add_imagelink');
        $this->load->view('footer');
    }

    public function imagelinksubmit()
    {
        $image_name = "";
        $gallery_name1 = '';
        $image_name = array();
        if (!empty($_FILES['userfile']['name'][0])) {

            // $this->load->library('upload');
            $files = $_FILES;
            $count = count($_FILES['userfile']['name']);
            for ($i = 0; $i < $count; $i++) {
                $this->load->library('upload');
                $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
                $slug = $_FILES['userfile']['name'];
                $conf = $this->set_upload_optionsmultiple($slug);
                $this->load->library('image_lib', $conf);
                $this->image_lib->resize();
                $this->upload->initialize($conf);
                $this->upload->do_upload('userfile');
                $upload_data = $this->upload->data();

                $image_name[] = $upload_data['file_name'];

            }

        }

        foreach ($image_name as $image_nameKey) {

            $data = array(
                'image_name' => $image_nameKey,
            );
            $this->Common_Model->insertData('extra_images', $data);
        }

        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Image Link Successfully Added.');

        redirect(base_url() . 'blog/view_imagelink');
        exit;
    }

    public function view_imagelink()
    {
        $result['result'] = $this->Common_Model->getAllResult('', 'extra_images', array());
        $this->load->view('header');
        $this->load->view('Blog/view_imagelink', $result);
        $this->load->view('footer');
    }

    public function edit_imagelink($sid)
    {
        $where = array('id' => $sid);
        $data['result'] = $this->Common_Model->getRowResult('', 'extra_images', $where);
        $this->load->view('header');
        $this->load->view('Blog/edit_imagelink', $data);
        $this->load->view('footer');
    }

    public function edit_imagelink_submit()
    {

        $image_name = "";
        $gallery_name1 = '';
        $image_name = array();
        $sid = $this->input->post('sid');
        $old_image = $this->input->post('old_image');
        if (!empty($_FILES['userfile']['name'][0])) {

            // $this->load->library('upload');
            $files = $_FILES;
            $count = count($_FILES['userfile']['name']);
            for ($i = 0; $i < $count; $i++) {
                $this->load->library('upload');
                $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
                $slug = $_FILES['userfile']['name'];
                $conf = $this->set_upload_optionsmultiple($slug);
                $this->load->library('image_lib', $conf);
                $this->image_lib->resize();
                $this->upload->initialize($conf);
                $this->upload->do_upload('userfile');
                $upload_data = $this->upload->data();

                $image_name[] = $upload_data['file_name'];

            }

            foreach ($image_name as $image_nameKey) {
                $data = array(
                    'image_name' => $image_nameKey,
                );
                $this->db->where('id', $sid)->update('extra_images', $data);
            }

            unlink("images/blogimage/" . $old_image);

        } else {

            $data = array(
                'image_name' => $old_image,
            );
            $this->db->where('id', $sid)->update('extra_images', $data);

        }

        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Image Link Successfully Added.');

        redirect(base_url() . 'blog/view_imagelink');
        exit;

    }

    public function delete_imagelink($sid)
    {
        $res = $this->db->where('id', $sid)->get('extra_images')->row_array();
        unlink("images/blogimage/" . $res['image_name']);
        $this->Common_Model->deleteData('id', $sid, 'extra_images');
        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Image Link Successfully Deleted.');
        redirect(base_url() . 'blog/view_imagelink');
        exit;
    }

    public function view_blogcomment()
    {
        $result['result'] = $this->Common_Model->getAllResult('', 'blog_comment', array());
        $this->load->view('header');
        $this->load->view('Blog/view_blogcomment', $result);
        $this->load->view('footer');
    }

    public function view_commentdetail($sid)
    {
        $where = array('id' => $sid);
        $data['result'] = $this->Common_Model->getRowResult('', 'blog_comment', $where);
        $this->load->view('header');
        $this->load->view('Blog/view_commentdetail', $data);
        $this->load->view('footer');
    }

    public function blog_status()
    {
        //    echo"hii"; die;
        $sid = $_GET['vopll'];
        $table = $_GET['table'];
        $value = $_GET['value'];
        $this->db->where('id', $sid)->update($table, array('status' => $value));
        die;
    }

    public function changeBlogCommentStatus()
    {
        $sid = $_GET['vopll'];
        $table = $_GET['table'];
        $value = $_GET['value'];
        $this->db->where('id', $sid)->update($table, array('commentshow_status' => $value));
        die;
    }

    public function comment_status($sid, $status)
    {

        $root = "http://" . $_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
        $data = array(
            'status' => $status,
        );
        $this->db->where('id', $sid)->update('blog_comment', $data);
        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Blog Comment Successfully Updated.');
        redirect(base_url() . 'blog/view_blogcomment');
        die;
    }

    public function latest_status()
    {
        //    echo"hii"; die;
        $sid = $_GET['vopll'];
        $table = $_GET['table'];
        $value = $_GET['value'];
        $this->db->where('id', $sid)->update($table, array('latest_status' => $value));
        die;
    }

    private function set_upload_optionsmultiple($slug)
    {
        $config = array();
        $config['upload_path'] = './images/blogimage';
        $config['allowed_types'] = '*';
        $config['file_name'] = $slug;
        $config['overwrite'] = false;
        return $config;
    }

    
    public function delete_blogcomment($sid)
    {
        $this->Common_Model->deleteData('id', $sid, 'blog_comment');
        $this->session->set_flashdata('digitalcashadminmessageTrue', 'Comment Successfully Deleted.');
        redirect(base_url() . 'blog/view_blogcomment');
        exit;
    }

}

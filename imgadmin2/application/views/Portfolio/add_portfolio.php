<?php 
$root = root();
$id=""; $logo=''; $image=''; $single_image=''; $title=''; $url=''; $tagline=''; $tech=''; $category = ''; 
// $categories= array('category1', 'category2');
$location=''; $website=''; $description=''; $type=''; $color='';

if(!empty($result))
  { 
    $id=$result['id'];
   $logo=$result['logo'];
   $image=$result['image'];
   $single_image=$result['single_image'];
   $section_image=$result['section_image'];
   $title=$result['title'];
   $url=$result['url'];
   $tagline=$result['tagline'];
   $tech=explode(',',$result['tech']);
   $category=explode(',',$result['category']);
   $location=$result['location'];
   $website=$result['website'];
   $description=$result['description'];
   $type=$result['type'];
   $color=$result['color'];
   $apkurl=$result['apkurl'];
	}

?>
<style>
    .cropImgModal {
        display: none;
        position: fixed;
        inset: 0px;
        z-index: 1000000;
    }
    .cropImgModal.active {
        display: block;
    }
    .cropImgModal a {
        position: absolute;
        top: 20px;
        right: 150px;
        z-index: 1000000;
    }

</style>
<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('portfolio/view_portfolio') ?>"><i class="fa fa-eye"></i> View Portfolio</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Add/Update Portfolio</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form action="<?= base_url('portfolio/portfoliosubmit'); ?>" method="post" enctype="multipart/form-data">
            
       <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" required name="title" placeholder="Enter The Title" class="form-control" value="<?php echo $title; ?>"/>
          </div>
      
      <div class="form-group">
            <label for="exampleInputEmail1">Website URL</label>
            <input type="url" required name="url" placeholder="Enter The Website Url" class="form-control" value="<?php echo $url; ?>"/>
          </div>
      
      <div class="form-group">
            <label for="exampleInputEmail1">Tagline</label>
            <input type="text" required name="tagline" placeholder="Enter The Tagline" class="form-control" value="<?php echo $tagline; ?>"/>
          </div>
      
      <div class="form-group">
            <label for="exampleInputEmail1">Technology</label>
            <select class="form-control test" required style="width:100%;" name="tech[]" multiple="multiple">                
                <?php  foreach ($res as $res) { ?>
                  <option value="<?= $res['id']; ?>" <?php if(in_array($res['id'],$tech)){echo 'selected';}?>> <?= $res['name']; ?></option>
                <?php } ?>
              </select>
          </div>
          
      <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control test" required style="width:100%;" name="category[]">                
                <?php  foreach ($categories as $categories) { ?>
                  <option value="<?= $categories['id']; ?>" <?php if(in_array($categories['id'],$category)){echo 'selected';}?>> <?= $categories['title']; ?></option>
                <?php } ?>
              </select>
          </div>
      
      <div class="form-group">
            <label for="exampleInputEmail1">Location</label>
            <input type="text" required name="location" placeholder="Enter The Location" class="form-control" value="<?php echo $location; ?>"/>
          </div>         
          
          <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input type="text" required name="color" placeholder="Enter Background Color" class="form-control" value="<?php echo $color; ?>"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">APK URL</label>
            <input type="url" name="apkurl" placeholder="Enter APK URL" class="form-control" value="<?php echo $apkurl; ?>"/>
          </div>
      
      <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" class="form-control ckeditor" required placeholder="Describe yourself here..."><?php echo $description; ?></textarea>
          </div>     

          <div class="form-group">
            <label for="exampleInputEmail1">Website Type</label>
            <select class="form-control" required style="width:100%;" name="type">
                <option value=""> Select Type </option>
                <?php  foreach ($ress as $ress) { ?>
                  <option value="<?= $ress['type']; ?>" <?php if($type == $ress['type']){echo 'selected';}?>> <?= $ress['name']; ?></option>
                <?php } ?>
              </select>
          </div>


          <div class="form-group custom-file-upload" data-crop="true" data-download="true" data-view-location="main-container" data-aspact-ratio="1/1" data-zoom="true" data-rotate="true">
            <a href="javascript:;" onclick="uploadImgLogo()" class="btn btn-primary">Upload Logo</a>
            <!-- <input id="blogImage" type="file" name="blog_image" <?php //if($blog_image==''){ echo "required"; } ?>  style="border:2px solid #fff; width:100%;"/> -->
            <input type="hidden" name="logo" >
            <label for="logo">Logo</label>

            <?php if($logo!='')
            { ?>
            <img src="<?= base_url('images/portfolio/logo/') ?><?= $logo; ?>" style="width:100px;" /><br>
            <?php } else { ?>
            <a target="_blank" href="<?= base_url('images/portfolio/logo/sample.webp') ?>"><img src="<?= base_url('images/portfolio/logo/sample.webp') ?>" style="width:100px;" /></a><br><br>
            <?php } ?>
            
            <note style="color:#000; font-weight:600;">Minimum Image size 20px X 20px</note>
          </div>

          <div class="cropImgModal imageModalLogo">
              <iframe id="logo" src="<?php echo base_url('cropjs/cropjs.php?type=logo&ratio=free'); ?>" style="width: 100%; height:100%;" frameborder="0"></iframe>
          </div>
      
          <div class="form-group custom-file-upload" data-crop="true" data-download="true" data-view-location="main-container" data-aspact-ratio="1/1" data-zoom="true" data-rotate="true">
            <a href="javascript:;" onclick="uploadImg()" class="btn btn-primary">Upload Image</a>
            <!-- <input id="blogImage" type="file" name="blog_image" <?php //if($blog_image==''){ echo "required"; } ?>  style="border:2px solid #fff; width:100%;"/> -->
            <input type="hidden" name="image" >
            <label for="image">Image</label>

            <?php if($image!='')
            { ?>
            <img src="<?= base_url('images/portfolio/') ?><?= $image; ?>" style="width:100px;" /><br>
            <?php } else { ?>
            <a target="_blank" href="<?= base_url('images/portfolio/sample.webp') ?>"><img src="<?= base_url('images/portfolio/sample.webp') ?>" style="width:100px;" /></a><br>
            <?php } ?>
            
            <note style="color:#000; font-weight:600;">Minimum Image size 512px X 520px</note>
          </div>

          
          <div class="cropImgModal imageModal">
              <iframe id="image" src="<?php echo base_url('cropjs/cropjs.php?type=image&ratio=16/16.25'); ?>" style="width: 100%; height:100%;" frameborder="0"></iframe>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="image" <?php //if($image==''){ echo "required"; } ?>  style="border:2px solid #fff; width:100%;"/>
            <?php //if($image!='')
            //{ ?>
            <img src="<?php //base_url('images/portfolio/') ?><?php //$image; ?>" style="width:100px;" />
            <?php //} ?>
            <note style="color:#fff; font-weight:600;"> Image size 279px X 186px</note>
          </div> -->

          <!-- <div class="form-group">
            <label for="exampleInputPassword1">Single Page Image</label>
            <input type="file" name="single_image" <?php //if($single_image==''){ echo "required"; } ?>  style="border:2px solid #fff; width:100%;"/>
            <?php //if($single_image!='')
            //{ ?>
            <img src="<?php //base_url('images/portfolio/single/') ?><?php //$single_image; ?>" style="width:100px;" />
            <?php //} ?>
            <note style="color:#fff; font-weight:600;"> Image size 279px X 186px</note>
          </div> -->
          <div class="form-group custom-file-upload" data-crop="true" data-download="true" data-view-location="main-container" data-aspact-ratio="1/1" data-zoom="true" data-rotate="true">
            <a href="javascript:;" onclick="uploadImg2()" class="btn btn-primary">Single Page Image</a>
            <!-- <input id="blogImage" type="file" name="blog_image" <?php //if($blog_image==''){ echo "required"; } ?>  style="border:2px solid #fff; width:100%;"/> -->
            <input type="hidden" name="single_image" >
            <label for="single_image">Image</label>

            <?php if($single_image!='')
            { ?>
            <img src="<?= base_url('images/portfolio/single/') ?><?= $single_image; ?>" style="width:100px;" /><br>
            <?php } else { ?>
            <a target="_blank" href="<?= base_url('images/portfolio/single/sample.webp') ?>"><img src="<?= base_url('images/portfolio/single/sample.webp') ?>" style="width:100px;" /></a><br>
            <?php } ?>
                                
            <note style="color:#000; font-weight:600;">Minimum Image size 1080px X 670px</note>
          </div>

          <div class="cropImgModal single_imageModal">
              <iframe id="image3" src="<?php echo base_url('cropjs/cropjs.php?type=image2&ratio=16/9.93'); ?>" style="width: 100%; height:100%;" frameborder="0"></iframe>
          </div>

          <div class="form-group custom-file-upload" data-crop="true" data-download="true" data-view-location="main-container" data-aspact-ratio="1/1" data-zoom="true" data-rotate="true">
            <a href="javascript:;" onclick="uploadImg3()" class="btn btn-primary">Section Page Image</a>
            <!-- <input id="blogImage" type="file" name="blog_image" <?php //if($blog_image==''){ echo "required"; } ?>  style="border:2px solid #fff; width:100%;"/> -->
            <input type="hidden" name="section_image">
            <label for="section_image">Image</label>

            <?php if($section_image!='')
            { ?>
            <img src="<?= base_url('images/portfolio/section/') ?><?= $section_image; ?>" style="width:100px;" /><br>
            <?php } else { ?>
            <a target="_blank" href="<?= base_url('images/portfolio/section/sample.webp') ?>"><img src="<?= base_url('images/portfolio/section/sample.webp') ?>" style="width:100px;" /></a><br>
            <?php } ?>
                                
            <note style="color:#000; font-weight:600;">Minimum Image size 720px X 711px</note>
          </div>
                            
          <div class="cropImgModal section_imageModal">
              <iframe id="image3" src="<?php echo base_url('cropjs/cropjs.php?type=image3&ratio=16/15.75'); ?>" style="width: 100%; height:100%;" frameborder="0"></iframe>
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1">Meta Title</label>
            <input type="text"  name="meta_title" placeholder="Meta Title" class="form-control" value="<?php if(!empty($result)){ echo $result['meta_title']; } ?>"/>
          </div>

		  <div class="form-group">
			<label for="exampleInputEmail1">Meta Keyword</label>
			<input type="text"  name="meta_keyword" placeholder="Meta Keyword" class="form-control" value="<?php if(!empty($result)){ echo $result['meta_keyword']; } ?>"/>
		  </div>

		  <div class="form-group">
			<label for="exampleInputEmail1">Meta Description</label>
			<textarea name="meta_description" placeholder="Meta Description" class="form-control" ><?php if(!empty($result)){ echo $result['meta_description']; } ?></textarea>
		  </div>
		  
         <div class="form-group">
			<input type="hidden" name="id" value="<?= $id; ?>" />
			<input type="hidden" name="old_logo" value="<?= $logo; ?>" />
			<input type="hidden" name="old_image" value="<?= $image; ?>" />
      <input type="hidden" name="old_single_image" value="<?= $single_image; ?>" />
      <input type="hidden" name="old_section_image" value="<?= $section_image; ?>" />

		</div>
         <?php if($image==''){ ?>
			<div class="form-group text-center">
				<input type="submit" value="Submit" class="btn btn-info" />
			</div>
			<?php } else { ?>
			<div class="form-group text-center">
				<input type="submit" value="update" class="btn btn-success" />
			</div>
			<?php } ?>
        </form>

                </div>

            </section>

            <!-- end Radio buttons and checkbox -->            

        </div>

    </div>

</section>

</section>

<script>
(function($) {
   $(function() {
       $('.test').fSelect();
   });
})(jQuery);

  function uploadImgLogo() {
      $(".imageModalLogo").addClass("active");
  }

  function uploadImg() {
      $(".imageModal").addClass("active");
  }
  function uploadImg2() {
      $(".single_imageModal").addClass("active");
  }
  function uploadImg3() {
      $(".section_imageModal").addClass("active");
  }
    var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
    var eventer = window[eventMethod];
    var messageEvent = (eventMethod == "attachEvent" ? "onmessage" : "message");
    eventer(messageEvent,function(e){
        var data = e.data;
        console.log(data);
        
        if(Object.keys(data).length){
          if(data.y==1){
            if(data.type=='logo'){
              $('input[name=logo]').val(data.x);
            }else if(data.type=='image'){
              $('input[name=image]').val(data.x);
            }else if(data.type=='image2'){
              $('input[name=single_image]').val(data.x);
            }
            else if(data.type=='image3'){
              $('input[name=section_image]').val(data.x);
            }
          }else{
              $('.cropImgModal').removeClass('active');
          }
          
          $('.cropImgModal').removeClass('active');
            
        }
        // alert(data);
    });
</script>
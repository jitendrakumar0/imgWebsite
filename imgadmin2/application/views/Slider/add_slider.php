<?php 
$root = root();
$id=""; $image=''; $name=''; $title='';$description=''; $sequence='';$url='';

if(!empty($result))
  { 
    $id=$result['id'];
    $image=$result['image'];
	$name=$result['name'];
	$title=$result['title'];
	$description=$result['description'];
	$sequence=$result['sequence'];
	$url=$result['url'];
	}

?>
 
<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('slider/view_slider') ?>"><i class="fa fa-eye"></i> View Slider</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Add/Update Slider</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form action="<?= base_url('slider/slidersubmit'); ?>" method="post" enctype="multipart/form-data">
            
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="<?= $title; ?>">
          </div> 
          
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" class="form-control ckeditor" placeholder="Describe here..."><?= $description; ?></textarea>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Order Number</label>
            <input type="number" name="sequence" class="form-control" placeholder="Order Number" value="<?= $sequence; ?>">
          </div>
          
           <div class="form-group">
            <label for="exampleInputEmail1">Site Url</label>
            <input type="text" name="url" class="form-control" placeholder="Site URL" value="<?= $url; ?>">
          </div>
            
            
          <div class="form-group">
            <label for="exampleInputEmail1">Image name / Alt</label>
            <input type="text"  required name="name" class="form-control" placeholder="Image Name/ Alt" value="<?= $name; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="image" <?php if($image==''){ echo "required"; } ?> />
				<?php if($image!='')
				{ ?>
				<img src="<?= base_url('images/slider/') ?><?= $image; ?>" style="width:100px;" />
				<?php } ?>
				<note style="color:#fff; font-weight:600;"> Image size 1510px X 410px </note>
          </div>
		  
		<div class="form-group">
			<label for="exampleInputEmail1">Button Text (separated by comma)</label>
			<input type="text" name="button_text" class="form-control" placeholder="Button Text" value="<?php if(!empty($result)){ echo $result['button_text']; } ?>">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Button URL(separated by comma)</label>
			<input type="text" name="button_url" class="form-control" placeholder="Button Text" value="<?php if(!empty($result)){ echo $result['button_url']; } ?>">
		</div>
		  
         <div class="form-group">
			<input type="hidden" name="id" value="<?= $id; ?>" />
			<input type="hidden" name="old_image" value="<?= $image; ?>" />
		</div>
         <?php if($image==''){ ?>
			<div class="form-group text-left">
				<input type="submit" value="Submit" class="btn btn-info" />
			</div>
			<?php } else { ?>
			<div class="form-group text-left">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php 
$root = root();
$id=""; $image=''; $name=''; $description='';

if(!empty($result))
  { 
    $id=$result['id'];
    $image=$result['image'];
  	$name=$result['name'];	
  	$description=$result['description'];	
  	$video_link=$result['video_link'];	
  	$review_name=$result['review_name'];	
  	$number_review=$result['number_review'];	
  	$sorting=$result['sorting'];	
	}

?>

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('testimonial/view_testimonial') ?>"><i class="fa fa-eye"></i> View Testimonials</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Add/Update Testimonial</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					 <form action="<?= base_url('testimonial/testimonialsubmit');?>" method="post" enctype="multipart/form-data" name="f3" id="f3">
          <div class="form-group">
            <label for="exampleInputEmail1">Project Name</label>
            <input type="text" required name="name" placeholder="Enter Name" value="<?= $name; ?>" class="form-control"/>
          </div>
      <div class="form-group">
            <label for="exampleInputEmail1">Testimonial</label>
            <textarea name="description" id="description"  class="form-control ckeditor" placeholder="Describe yourself here..."><?= $description; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Video Id (Youtube video Id - Given in url)</label>
            <input type="text" name="video_link" placeholder="Enter Name" value="<?= $video_link; ?>"  class="form-control"/>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Review Type (ex. Google Review, Facebook Review)</label>
            <input type="text" required name="review_name" placeholder="Enter Name" value="<?= $review_name; ?>" class="form-control" require/>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Rating (Rating out of 5)</label>
            <select name="number_review" class="form-control" id="" require>
              <option value="1" <?php if($number_review==1){echo 'selected';} ?>>1</option>
              <option value="2" <?php if($number_review==2){echo 'selected';} ?>>2</option>
              <option value="3" <?php if($number_review==3){echo 'selected';} ?>>3</option>
              <option value="4" <?php if($number_review==4){echo 'selected';} ?>>4</option>
              <option value="5" <?php if($number_review==5){echo 'selected';} ?>>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Sorting Number</label>
            <input type="number" name="sorting" placeholder="Enter Sorting Number" value="<?= $sorting; ?>"  class="form-control"/>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Project Logo</label>
            <input type="file" name="image" <?php if($image==''){ echo "required"; } ?> />
                <?php if($image!='')
                { ?>
              <img src="<?= base_url('images/testimonial/')?><?= $image; ?>" style="width:100px;height:100px" />
              <?php } ?>
              
              
              <note style="color:#fff; font-weight:600;"> Image size 150px X 60px </note>
          </div>
      <div class="form-group">
            <input type="hidden" name="id" value="<?= $id; ?>" />
            <input type="hidden" name="old_image" value="<?= $image; ?>" />
          </div>
         
        <?php if($id==''){ ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
           $(document).ready(function(){

            $("#f3").validate(
            {
                ignore: [],
              debug: false,
                rules: { 

                    description:{
                         required: function() 
                        {
                         CKEDITOR.instances.description.updateElement();
                        },

                         minlength:10
                    }
                },
                messages:
                    {

                    description:{
                        required:"Please enter Text",
                        minlength:"Please enter 10 characters"


                    }
                }
            });
        });
      </script>

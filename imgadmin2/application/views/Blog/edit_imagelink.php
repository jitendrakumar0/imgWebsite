<?php 
$root = root();
?>

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/view_imagelink') ?>"><i class="fa fa-eye"></i> View Image Link</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Edit Image Link</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form action="<?= base_url('blog/edit_imagelink_submit'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?= $result['id']; ?>" name="sid" />
        <div class="form-group">
		<img src="<?= base_url('images/blogimage/') ?><?= $result['image_name']; ?>" style="width:100px;" />
            <label for="exampleInputEmail1">Image</label>
            <input type="file" name="userfile[]" multiple class="form-control" placeholder="Image">
			<input type="hidden" value="<?= $result['image_name']; ?>" name="old_image" />
          </div>
                  
			   <div class="form-group text-center">
			     	<input type="submit" value="Submit" class="btn btn-info" />
			   </div>
			
        </form>

                </div>

            </section>

            <!-- end Radio buttons and checkbox -->            

        </div>

    </div>

</section>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

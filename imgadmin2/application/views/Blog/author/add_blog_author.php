<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

			<div class="space"></div>
			
			<?php if(!empty($result)){ ?>
				<a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/author/add_blog_author') ?>"><i class="fa fa-plus-circle"></i> Add Blog Author</a>
			<?php } ?>
			
            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/author/view_blog_author') ?>"><i class="fa fa-eye"></i> View Blog Author</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span> <?php if(!empty($result)){ echo "Update"; }else{ echo 'Add'; } ?> Blog Author</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>
				
					<form action="<?= base_url('Blog/addBlogAuthorEnd'); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php if(!empty($result)){ echo $result['id']; }else{ echo '0'; } ?>" />
						<div class="form-group">
							<label for="exampleInputEmail1">Author Name <span class="text-danger">*</span></label>
							<input type="text" name="author_name" class="form-control" required placeholder="Author Name"  value="<?php if(!empty($result)){ echo $result['author_name']; } ?>">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Description <span class="text-danger">*</span></label>
							<textarea class="form-control" required name="description" placeholder="Enter Author Description"><?php if(!empty($result)){ echo $result['description']; } ?></textarea>
						</div>  
						
						<?php 
							if(!empty($result)){
						?>
							<div class="form-group">
								<img src="<?php echo base_url('images/blogauthor/'.$result['image']); ?>" style="width:100px" />
							</div>
						<?php } ?>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Image <?php if(empty($result)){ ?><span class="text-danger">*</span><?php } ?></label>
							<input type="file" name="author_image" <?php if(empty($result)){ echo 'required'; } ?> />
							<input type="hidden" name="old_author_image" value="<?php if(!empty($result)){ echo $result['image']; } ?>" />
						</div>
						
						<div class="form-group text-left">
							<?php if($id==''){ ?>
								<input type="submit" value="Submit" class="btn btn-info" />
							<?php } else { ?>
								<input type="submit" value="update" class="btn btn-success" />
							<?php } ?>
						</div>
						
					</form>

                </div>

            </section>

            <!-- end Radio buttons and checkbox -->            

        </div>

    </div>

</section>

</section>

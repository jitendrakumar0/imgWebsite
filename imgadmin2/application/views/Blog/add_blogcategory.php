<?php 
$root = root();
$id=""; $title=''; $url='';

if(!empty($result))
  { 
    $id=$result['id'];
	 $title=$result['title'];
   $url=$result['url'];
	}

?>

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/view_blogcategory') ?>"><i class="fa fa-eye"></i> View Blog Category</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Add/Update Blog Category</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form action="<?= base_url('blog/blogcategorysubmit'); ?>" method="post" enctype="multipart/form-data">
            
        <div class="form-group">
            <label for="exampleInputEmail1">Category Title</label>
            <input type="text" name="title" class="form-control" required placeholder="Category Title" pattern="[a-zA-Z]{1}[a-zA-Z\s]+" value="<?= $title; ?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Category Url</label>
            <input type="url" name="url" class="form-control" required placeholder="Category Url" value="<?= $url; ?>">
          </div> 
          
         <div class="form-group">
			<input type="hidden" name="id" value="<?= $id; ?>" />	
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

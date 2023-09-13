<?php 
$root = root();
$id=""; $image='';$post_name=''; $experiance=''; $qualification='';

if(!empty($result))
  { 
    $id=$result['id'];
    $image=$result['image'];
  	$post_name=$result['post_name'];
  	$experiance=$result['experiance'];
  	$qualification=$result['qualification'];  
    $serial = $result['serial'];	
	}

?>

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('currentopening/viewcurrentopening') ?>"><i class="fa fa-eye"></i> View Current Opening</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Add/Update Current Opening</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form action="<?= base_url('CurrentOpening/currentopeningsubmit'); ?>" method="post" enctype="multipart/form-data">
            
       <div class="form-group">
            <label for="exampleInputEmail1">Post Name</label>
            <input type="text" name="post_name" class="form-control" placeholder="Post Name" value="<?= $post_name; ?>">
          </div> 
          
          <div class="form-group">
            <label for="exampleInputEmail1">Experiance</label>
            <input type="text" name="experiance" class="form-control" placeholder="Experiance" value="<?= $experiance; ?>">
          </div>

          
           <div class="form-group">
            <label for="exampleInputEmail1">Qualification</label>
            <input type="text" name="qualification" class="form-control" placeholder="Qualification" value="<?= $qualification; ?>">
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Serial No.</label>
            <input type="number" name="serial" class="form-control" placeholder="Serial Number" value="<?= $serial; ?>">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="image" <?php if($image==''){ echo "required"; } ?> />
                  <?php if($image!='')
                  { ?>
                <img src="<?= base_url('images/currentopening/')?><?= $image; ?>" style="width:100px;" />
                <?php } ?>               
                
                <note style="color:#fff; font-weight:600;"> Image size  </note>
          </div>

         <div class="form-group">
			<input type="hidden" name="id" value="<?= $id; ?>" />
			<input type="hidden" name="old_image" value="<?= $image; ?>" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

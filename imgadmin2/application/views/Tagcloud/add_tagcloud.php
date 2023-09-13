<?php 
$root = root();
$id=""; $name=''; $url='';

if(!empty($result))
  { 
    $id=$result['id'];
    $name=$result['name'];
  	$url=$result['url'];
	}

?>

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('tagcloud/view_tagcloud') ?>"><i class="fa fa-eye"></i> View Tag Cloud</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Add/Update Tag Cloud</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form action="<?= base_url('tagcloud/tagcloudsubmit'); ?>" method="post" enctype="multipart/form-data">
            
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" required name="name" placeholder="Enter Name" value="<?php echo $name; ?>" class="form-control"/>
          </div>
		<div class="form-group">
			<label for="exampleInputEmail1">Sort Order</label>
			<input type="number" required name="sort_order" placeholder="Enter Sort Order" value="<?php if(!empty($result)){ echo $result['sort_order']; } ?>" class="form-control"/>
		</div>
          <div class="form-group">
            <label for="exampleInputPassword1">Url</label>
            <input type="url" required name="url" placeholder="Enter Url" value="<?php echo $url; ?>" class="form-control">
          </div>
      <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
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

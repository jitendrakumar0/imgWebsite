<?php 
$root = root();
$id=""; $image=''; $color_image=''; $category=''; $name='';$designation='';

if(!empty($result))
  { 
  $id=$result['id'];
  $image=$result['image'];
	$color_image=$result['color_image'];
	$name=$result['name'];
	$designation=$result['designation'];
	$category=explode(',',$result['category']);
	}

?>

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('team/view_team') ?>"><i class="fa fa-eye"></i> View Team</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>Add/Update Team</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form action="<?= base_url('team/teamsubmit'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleInputEmail1">Select Category</label>
                <select class="form-control test" name="category[]"  multiple="multiple" required>               
                  <option value="digital-marketing" <?php if(in_array('digital-marketing',$category)){echo 'selected';}?>> Digital Marketing</option>
                  <option value="web-developer" <?php if(in_array('web-developer',$category)){echo 'selected';}?>> Web Developer</option>
                  <option value="app-developer" <?php if(in_array('app-developer',$category)){echo 'selected';}?>> App Developer</option>
                  <option value="founders-partners" <?php if(in_array('founders-partners',$category)){echo 'selected';}?>> Founders & Partners</option>
                  <option value="team-leader" <?php if(in_array('team-leader',$category)){echo 'selected';}?>> Team Leader</option>
                  <option value="ui-ux-designer" <?php if(in_array('ui-ux-designer',$category)){echo 'selected';}?>> UI/UX Designer</option>
                  <option value="admin-department" <?php if(in_array('admin-department',$category)){echo 'selected';}?>> Admin Department</option>
                  <option value="java-department" <?php if(in_array('java-department',$category)){echo 'selected';}?>> Java Department</option>      

              </select>
          </div>
            
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" required class="form-control" placeholder="Name" value="<?= $name; ?>">
          </div> 
          
          <div class="form-group">
            <label for="exampleInputEmail1">Designation</label>
            <input type="text" name="designation" required class="form-control ckeditor" placeholder="Designation" value="<?= $designation; ?>">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1"> Color Image</label>
            <input type="file" name="color_image" <?php if($color_image==''){ echo "required"; } ?> /> 
            <?php if($color_image!='')
        { ?>
        <img src="<?= base_url('images/team/') ?><?= $color_image; ?>" style="width:100px;" />
        <?php } ?>         
          
          <div class="form-group">
            <label for="exampleInputPassword1"> Black&White Image</label>
            <input type="file" name="image" <?php if($image==''){ echo "required"; } ?> />
				<?php if($image!='')
				{ ?>
				<img src="<?= base_url('images/team/') ?><?= $image; ?>" style="width:100px;" />
				<?php } ?>
				<note style="color:#fff; font-weight:600;"> Image size 1510px X 410px </note>
          </div>
         <div class="form-group">
			<input type="hidden" name="id" value="<?= $id; ?>" />
			<input type="hidden" name="color_old_image" value="<?= $color_image; ?>" />
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
<script>
(function($) {
   $(function() {
       $('.test').fSelect();
   });
})(jQuery);
</script>
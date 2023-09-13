

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('leads/view_leads') ?>"><i class="fa fa-eye"></i> View Leads</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span> Add Leads</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					 <form action="<?= base_url('Leads/leadssubmit');?>" method="post" enctype="multipart/form-data" name="f3" id="f3">
          <div class="form-group">
            <label for="exampleInputEmail1">Contact Name <span style="color:red" >*</span></label>
            <input type="text" required name="contactname" placeholder="Contact Name *" value="" class="form-control"/>
          </div>

		  <div class="form-group">
            <label for="exampleInputEmail1">Mobile Number <span style="color:red" >*</span></label>
            <input type="number" name="contactnumber" pattern="^\d{10}$" class="form-control" required="" minlength="10" maxlength="10"  placeholder="Mobile No.*"/>
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Email <span style="color:red" >*</span></label>
            <input type="email" name="contactemail" class="form-control" required="" placeholder="Email-Id *" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"/>
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Organization <span style="color:red" >*</span></label>
            <input type="text" id="organization" name="organization" class="form-control" placeholder="Enter Organization (Optional)"/>
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Requirements <span style="color:red" >*</span></label>
            <input type="text" id="tags" name="requirement" class="form-control" required="" placeholder="Enter Requirment *"/>
          </div>
		  
          <div class="form-group">
            <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
            <textarea name="contactmessage" id="description" required=""  class="form-control" placeholder="Please Enter Message.."><?= $description; ?></textarea>
          </div>


          <div class="form-group text-left">
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

	<?php 
		$requiredArray=array();
		$result = $this->db->order_by('id','asc')->get('career_post_requirememnt')->result_array(); 
	?> 
	
	<script>
		var availableTags=[];
	<?php foreach($result as $rowq){ ?>
		value='<?php echo ucfirst($rowq["post_name"]); ?>';
		availableTags.push(value); 
	<?php } ?> 
	</script>
 <script>
	
  $( function() {  
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  

</script>

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

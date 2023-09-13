
<section id="content" class="content-container">
<section class="page-form-ele page"> 
	<div class="row">
         <div class="col-lg-12">
            <!-- Radio buttons and checkbox -->
            <section class="panel panel-default">
                <div class="panel-heading"><strong>
        <span class="glyphicon glyphicon-th"></span> All Fantasy Contacts</strong></div>
 

        <div class="panel-body">
			<div class="table-responsive">
                <table id="allUser1" class="table table-striped table-bordered leads-table" style="width:100%">
                    <thead>
                        <tr>
							<th  style="width:10%">S No.</th>
							<th>Created Date</th>                      
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
			     <?php  
				  if(!empty($result))
				  {
					$s_no=1;
					foreach($result as $value)
					{ 
				  ?>
					<tr>
						 <td><?php echo $s_no;?></td>
						 <td><?= date('d-M-Y H:i:s',strtotime($value['created_date'])); ?></td>
						 <td><?= $value['full_name']?></td>
						 <td><?= $value['phone_number']?></td>
						 <td><?= $value['email']?></td>
						 <td><?= $value['looking_for']; ?></td> 						 
					</tr>
				  <?php $s_no++; } ?>
				  <?php  }  ?>
                    </tbody>
                </table>
                  </div>
                </div>
            </section>

            <!-- end Radio buttons and checkbox -->            
        </div>
    </div>
</section>




<section id="content" class="content-container">
<section class="page-form-ele page"> 
	<div class="row">
         <div class="col-lg-12">
            <!-- Radio buttons and checkbox -->
            <section class="panel panel-default">
                <div class="panel-heading"><strong>
        <span class="glyphicon glyphicon-th"></span> All Upcoming Leads</strong></div>
 

        <div class="panel-body">
			<div class="table-responsive">
                <table id="allUser1" class="table table-striped table-bordered leads-table" style="width:100%">
                    <thead>
                        <tr>
							<th  style="width:10%">S No.</th>
							<th>Created Date</th>                      
							<th>Next Followup Date</th>                      
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<?php if($this->session->userdata('store100type')=='master_user'){?>
							<th>Assign To</th> 
							<?php } ?>							
							<th>Description</th> 
							<th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
			     <?php  
				  if(!empty($result))
				  {
					$s_no=1;
					foreach($result as $value)
					{ $ress = $this->db->where('id',$value['assign_to'])->get('users')->row_array();
				  ?>
					<tr>
						 <td><?php echo $s_no;?></td>
						 <td><?= date('d-M-Y H:i:s',strtotime($value['created_date'])); ?></td>
						 <td><?= date('d-M-Y',strtotime($value['followup_date'])); ?></td>
						 <td><?= $value['name']?></td>
						 <td><?= $value['mobile']?></td>
						 <td><?= $value['email']?></td>
						 <?php if($this->session->userdata('store100type')=='master_user'){?>
						 <?php if($value['assign_to'] =='0'){?>
						 	<td>Not Assign Yet</td>
						 <?php } else { ?>
						 <td><?= $ress['username'];?></td> 
						 <?php } ?>   
						 <?php } ?>   
						<td>
							<?php 
								$typeValue=$value['type'];
								 
								if($value['type']=='Request Quote'){ 
									$desResult=$this->db->select('description')->get_where('request_quote',array('id'=>$value['type_id']))->row_array();
									if(!empty($desResult)){
										$typeValue='Request Quote-'.$desResult['description'];
									}
								}else if($value['type']=='Contact'){ 
									$desResult=$this->db->select('message')->get_where('contact',array('id'=>$value['type_id']))->row_array();
									if(!empty($desResult)){
										$typeValue='Contact-'.$desResult['message'];
									}
								}else if($value['type']=='Request For Demo'){ 
									$desResult=$this->db->select('message')->get_where('request_demo',array('id'=>$value['type_id']))->row_array();
									if(!empty($desResult)){
										$typeValue='Request For Demo-'.$desResult['message'];
									}
								}else if($value['type']=='Offshore'){ 
									$desResult=$this->db->select('question')->get_where('offshore',array('id'=>$value['type_id']))->row_array();
									if(!empty($desResult)){
										$typeValue='Offshore-'.$desResult['question'];
									}
								}else if($value['type']=='Order'){ 
									$desResult=$this->db->select('message')->get_where('order_detail',array('id'=>$value['type_id']))->row_array();
									if(!empty($desResult)){
										$typeValue='Order-'.$desResult['message'];
									}
								}else if($value['type']=='Digital Marketing'){
									$typeValue="Digital Marketing"; 
								}else if($value['type']=='Fantasy Enquiry'){
									$desResult=$this->db->select('looking_for')->get_where('fantasy_enquiry',array('id'=>$value['type_id']))->row_array();
									$typeValue="Fantasy Enquiry For :-".$desResult['looking_for']; 
								}
								
								echo $typeValue;
								
							?>
						</td>   
						<td>
								<a href="#" onclick="openModalView('<?= $value['id'] ?>')"
												class="fa fa-file-text-o btn-warning" title="View Follow up List"></a>
						</td>                   
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

<div id="view" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form method="post" action="<?= base_url('Leads/follow_up_request') ?>">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">View Lead</h4>
				</div>
				<div class="modal-body">
					<div class="control-group">
						<div id="lidview">

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	function openModalView(lid) {
			// alert(cat);
			$.ajax({
				type: "POST",
				async: false,
				url: "<?= base_url('Leads/'); ?>view_lead_data",
				data: {
					lid: lid,
				},
				error: function () { alert("error occur") },
				success: function (a) {
					// alert(a);	
					$("#lidview").html(a);
					$("#view").modal('show');
				}
			});
		}
</script>



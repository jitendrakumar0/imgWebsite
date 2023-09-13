<section id="content" class="content-container">
	<section class="page-form-ele page">
		<style>
			.ui-datepicker select.ui-datepicker-month,
			.ui-datepicker select.ui-datepicker-year {
				width: 49%;
				color: black;
			}
		</style>
		<div class="row">
			<div class="col-lg-12">
				<!-- Radio buttons and checkbox -->
				<section class="panel panel-default">
					<div class="panel-heading"><strong>
					   <span class="glyphicon glyphicon-th"></span> Today Leads / FollowUp's</strong></div>


					<div class="panel-body">
						<div class="table-responsive">
							<table id="allUser" class="table table-striped table-bordered leads-table"
								style="width:100%">
								<thead>
									<tr >
										<th style="width:10%">S No</th>
										<th>Created Date</th> 
										<th>Name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Description</th>
										<?php if($this->session->userdata('store100type')=='master_user'){?>
										<th>Assign To</th> 
										<?php }?>
										<th>Followup Date</th>
										<th style="width:20%">Action</th>
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
									<tr onclick="javascript:showRow(this);">
										<td><?php echo $s_no;?></td>
										<td><?= date('d-M-Y H:i:s',strtotime($value['created_date'])); ?></td> 
										<td><?= $value['name']?></td>
										<td>(<?= $value['phonecode']?>) <?= $value['mobile']?></td>
										<td><?= $value['email']?></td>
										<td> 
											<?php 
												$typeValue=$value['type'];
												 
												if($value['type']=='Request Quote'){ 
													$desResult=$this->db->select('description')->get_where('request_quote',array('id'=>$value['type_id']))->row_array();
													if(!empty($desResult)){
														$typeValue='Request Quote-'.$desResult['description'];
													}
												}else if($value['type']=='Contact'){ 
													$desResult=$this->db->select('message,organization')->get_where('contact',array('id'=>$value['type_id']))->row_array();
													if(!empty($desResult)){
														$typeValue='Contact-'.$desResult['message']."<br>Organization:-";
														if($desResult['organization']!=''){
															$typeValue.=ucfirst($desResult['organization']);
														}else{
															$typeValue.='N/A';
														}
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
										<?php if($this->session->userdata('store100type')=='master_user'){?>
										<?php if($value['assign_to'] =='0'){?>
										<td>Not Assign Yet</td>
										<?php } else { ?>
										<td><?= $ress['username'];?></td>
										<?php } ?>
										<?php } ?>
										<td><?= date('d-M-Y',strtotime($value['followup_date'])); ?></td>
										<td>
											<a href="#" onclick="openModalView_Desc('<?= $value['id'] ?>')"
												class="fa fa-eye"  style="background:#2098d1"  title="View Lead Description"></a>
 
											<a href="#" onclick="openModalReject('<?= $value['id'] ?>')"
												class="fa fa-ban" style="background:#ed5650" title="Reject"></a>

											<a href="#" onclick="openModalAccept('<?= $value['id'] ?>')"
												class="fa fa-check-square" style="background:#2dbf64" title="Approve"></a>
											
											<a href="#" onclick="openModalView('<?= $value['id'] ?>')"
												class="fa fa-file-text-o" style="background:#2098d1" title="View Follow up List"></a>
												
											<a href="#"
												onclick="openModalFollow('<?= $value['id'] ?>','<?= $value['alternate_contactno'] ?>','<?= $value['alternate_type'] ?>')"
												class="fa fa-repeat" style="background:#e8910d" title="Follow up"></a>
		
											<a href="<?= base_url('Leads/delete_lead_request/'.$value['id']); ?>"
												onclick="return confirm('Are you sure want to delete this entry.')"
												class="fa fa-trash"  style="background:#ed5650" title="Delete"></a>
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

		<div class="row">
			<div class="col-lg-12">
				<!-- Radio buttons and checkbox -->
				<section class="panel panel-default">
					<div class="panel-heading"><strong>
							<span class="glyphicon glyphicon-th"></span> All Pending Leads</strong></div>


					<div class="panel-body">
						<div class="table-responsive">
							<table id="allUser1" class="table table-striped table-bordered leads-table"
								style="width:100%">
								<thead>
									<tr>
										<th style="width:10%">S No.</th>
										<th>Created Date</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Description</th>
										<th>Assign To</th>
										<th style="width:20%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php  
				  if(!empty($pending_result))
				  {
					$s_no=1;
					foreach($pending_result as $value)
					{   $res = $this->db->where('id',$value['assign_to'])->get('users')->row_array();
				  ?>
									<tr onclick="javascript:showRow(this);">
										<td><?php echo $s_no;?></td>
										<td><?= date('d-M-Y H:i:s',strtotime($value['created_date'])); ?></td>
										<td><?= $value['name']?></td>
										<td>(<?= $value['phonecode']?>) <?= $value['mobile']?></td>
										<td><?= $value['email']?></td>

										<td>
											<?php 
								$typeValue=$value['type'];
								 
								if($value['type']=='Request Quote'){ 
									$desResult=$this->db->select('description')->get_where('request_quote',array('id'=>$value['type_id']))->row_array();
									if(!empty($desResult)){
										$typeValue='Request Quote-'.$desResult['description'];
									}
								}else if($value['type']=='Contact'){ 
									$desResult=$this->db->select('message,organization')->get_where('contact',array('id'=>$value['type_id']))->row_array();
									if(!empty($desResult)){
										$typeValue='Contact-'.$desResult['message']."<br>Organization:-";
										if($desResult['organization']!=''){
											$typeValue.=ucfirst($desResult['organization']);
										}else{
											$typeValue.='N/A';
										}
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
										<?php if($value['assign_to'] =='0'){?>
										<td>Not Assign Yet</td>
										<?php } else { ?>
										<td><?= $res['username'];?></td>
										<?php } ?>
										<td>
											
											<a href="#" onclick="openModalView_Desc('<?= $value['id']?>')"
												class="fa fa-eye btn-info" style="background:#2098d1"  title="View"></a>
												
											<a href="#" onclick="openModalReject('<?= $value['id'] ?>')"
												class="fa fa-ban btn-danger" style="background:#ed5650" title="Reject"></a>
											<?php if($this->session->userdata('store100type') =='master_user'){?>
											<a href="#" onclick="openModalAssign('<?= $value['id'] ?>')"
												class="fa fa-user-plus" style="background:#e8910d" title="Assign to"></a>
											<?php } ?>
											<a href="#" onclick="openModalAccept('<?= $value['id'] ?>')"
												class="fa fa-check-square" style="background:#2dbf64"  title="Approve"></a>

											<a href="#"
												onclick="openModalFollow('<?= $value['id'] ?>','<?= $value['alternate_contactno'] ?>','<?= $value['alternate_type'] ?>')"
												class="fa fa-repeat" style="background:#e8910d"   title="Follow up"></a>
 
											<?php if($this->session->userdata('store100type') =='master_user'){?>
											<a href="<?= base_url('Leads/delete_lead_request/'.$value['id']);?>"
												onclick="return confirm('Are you sure want to delete this entry.')"
												class="fa fa-trash btn-danger" style="background:#ed5650" title="Delete"></a>
											<?php } ?>

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

	<!---Discount  Modal Window-->
	<div id="reject" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<form method="post" action="<?= base_url('Leads/reject_lead_request') ?>">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Deny Request</h4>
					</div>
					<div class="modal-body">
						<div class="control-group">
							<div class="form-group">
								<label for="focusedinput" class="control-label">Reason <span>*</span></label>
								<textarea class="form-control" name="reject_reason" required id="message-text"
									placeholder="Reason"></textarea>
							</div>
							<input type="hidden" value="" id="uid" name="uid">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input id="next" type="submit" class="btn btn-primary" type="submit" value="Submit" />
					</div>
				</div>
			</form>
		</div>
	</div>


	<div id="accept" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<form method="post" action="<?= base_url('Leads/accept_lead_request') ?>">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Accept Request</h4>
					</div>
					<div class="modal-body">
						<div class="control-group">
							<div class="form-group">
								<label for="focusedinput" class="control-label">Description <span>*</span></label>
								<textarea class="form-control" name="accept_reason" required id="message-text"
									placeholder="Description"></textarea>
							</div>
							<input type="hidden" value="" id="aid" name="aid">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input id="next" type="submit" class="btn btn-primary" type="submit" value="Submit" />
					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="view_desc" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<form method="post" action="<?= base_url('Leads/view_request') ?>">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">View Description</h4>
					</div>
					<div class="modal-body">

						<div class="control-group">
							<div class="form-group">
								<label for="focusedinput" class="control-label">Description <span>*</span></label>
								<textarea class="form-control" name="view_description" required id="description"
									placeholder="Description"></textarea>
							</div>

							<input type="hidden" value="" id="vid" name="vid">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="assign" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<form method="post" action="<?= base_url('Leads/assign_to') ?>">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Assign to</h4>
					</div>
					<div class="modal-body">
						<?php $user = $this->db->where('type','lead_user')->get('users')->result_array();?>
						<div class="control-group">
							<div class="form-group">
								<label for="focusedinput" class="control-label">Select Lead User<span>*</span></label>
								<select class="form-control" name="assign_to">
									<option value="" disabled selected>--Select User--</option>
									<?php foreach($user as $exm) { ?>
									<option value="<?= $exm['id']; ?>"> <?= $exm['username']; ?></option>
									<?php } ?>

								</select>
							</div>

							<div class="form-group">
								<label for="focusedinput" class="control-label">Next Follow Up Date
									<span>*</span></label>
								<input type="text" class="form-control" name="follow_date" id="datess" required
									placeholder="Enter Next Follow Up Date">
							</div>
							<div class="form-group">
								<label for="focusedinput" class="control-label">Remark <span>*</span></label>
								<textarea class="form-control" name="follow_remark" required id="message-text"
									placeholder="Remark"></textarea>
							</div>

							<input type="hidden" value="" id="asid" name="asid">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input id="next" type="submit" class="btn btn-primary" type="submit" value="Submit" />
					</div>
				</div>
			</form>
		</div>
	</div>


	<div id="follow" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<form method="post" action="<?= base_url('Leads/follow_up_request') ?>">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Follow Up</h4>
					</div>

					<div class="modal-body">
						<div class="control-group">
							<div class="form-group">
								<label for="focusedinput" class="control-label">Next Follow Up Date
									<span>*</span></label>
								<input type="text" class="form-control" name="follow_date" id="dates" required
									placeholder="Enter Next Follow Up Date">
							</div>
							<div class="form-group">
								<label for="focusedinput" class="control-label">Remark <span>*</span></label>
								<textarea class="form-control" name="follow_remark" required id="message-text"
									placeholder="Remark"></textarea>
							</div>
							<div class="row">
								<div class="form-group col-md-8">
									<label for="focusedinput" class="control-label">Alternate Number </label>
									<input type="text" class="form-control" name="alternate_contactno"
										id="alternate_contactno" value="" placeholder="Alternate Number">
								</div>

								<div class="form-group col-md-4">
									<label for="focusedinput" class="control-label">Select Contact
										Type</label>
									<select class="form-control" name="contact_type" id="alternate_contacttype">
										<option value="" disabled selected>--Select Type--</option>
										<option value="Contact">Contact</option>
										<option value="Whatsapp">WhatsApp</option>
									</select>
								</div>
							</div>

							<input type="hidden" value="" id="fid" name="fid">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input id="next" type="submit" class="btn btn-primary" type="submit" value="Submit" />
					</div>
				</div>
			</form>
		</div>
	</div>


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

		function openModalFollow(id, altcontact, altType) {
			$("#fid").val(id);
			$('#alternate_contactno').val(altcontact);
			$('#alternate_contacttype').val(altType);
			$('#follow').modal();
		}

		function openModalReject(id) {
			$("#uid").val(id);
			$('#reject').modal();
		}

		function openModalAccept(id) {
			$("#aid").val(id);
			$('#accept').modal();
		}

		function openModalAssign(id) {
			$("#asid").val(id);
			$('#assign').modal();
		}

		function openModalView_Desc(id) { 
			$("#vid").val(id);
			$('#view_desc').modal();
		} 
	</script>

	<script>
		$(function () {
			$("#dates").datepicker({
				minDate: +1, changeMonth: true,
				changeYear: true
			});
		});
	</script>

	<script>
		$(function () {
			$("#datess").datepicker({
				minDate: +1, changeMonth: true,
				changeYear: true
			});
		});
	</script>

	<script language="javascript" type="text/javascript">
		function showRow(row) {
			var x = row.cells;
			document.getElementById("description").value = x[5].innerHTML.trim();
		}
	</script>
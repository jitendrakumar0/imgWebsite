<section id="content" class="content-container">
    <section class="page-form-ele page">
        <section class="panel panel-default">
            <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>
            <div class="panel-body"> 
                <div class="space"></div> 
                <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('leads/view_leads') ?>"><i class="fa fa-eye"></i> View Leads</a> 

            </div>

            <style>
                .folowoow table tr td,
                .folowoow table tr th {
                    padding: 10px !important;

                    background: #f4f4f4;
                }

                .panel-default h6 {
                    margin-top: 0px;
                    margin-bottom: 0px;
                }

                .folowoow p {
                    margin-bottom: 0px;
                }

                .tetst {
                    padding: 15px;
                }

                .folowoow {
                    background: #f4f4f4;
                    padding: 15px;
                }

                .detilsss {
                    padding: 15px;
                    padding-bottom: 7px
                }

                .detilsss h6 {
                    margin-bottom: 8px;
                }

                .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
                      width: 49%;
                      color: black;
				}
            </style>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Radio buttons and checkbox -->
                    <section class="panel panel-default">
                        <div class="panel-heading"><strong>
                                <span class="glyphicon glyphicon-th"></span> View Leads Detail</strong></div>

                        <div class="col-md-12" style="margin-top:30px; margin-bottom:30px;">
                            <div class="col-md-12" style="border:1px solid #ddd; padding:0px; box-shadow:0px 0px 10px rgba(0,0,0,0.2)">
                                <div class="col-md-12 folowoow">
                                    <h6>Lead Date Time : <span><?= date('d M yy H:i:s', strtotime($result['created_date']));?></span></h6>
                                </div>
                                <div class="col-md-12 detilsss">
                                    <h6><strong> Name </strong>: <?= $result['name'] ?> </h6>
                                    <h6><strong> Mobile </strong>: <?= $result['mobile'] ?> </h6>
                                    <h6><strong> Email </strong>: <?= $result['email'] ?> </h6>
                                </div>
                                
								
								
								<div class="col-md-12 folowoow">
                                    <h6>Client Requirements : </h6>
                                </div>
								<?php if($result['type']=="Request Quote"){ 
								$userdetail = $this->db->where('id',$result['type_id'])->get('request_quote')->row_array();
								?>
                                <div class="col-md-12 detilsss">
                                    <h6><strong> Name </strong>: <?= $userdetail['name'] ?> </h6>
                                    <h6><strong> Mobile </strong>: <?= $userdetail['mobile'] ?> </h6>
                                    <h6><strong> Email </strong>: <?= $userdetail['email'] ?> </h6>
									<h6><strong> Skype </strong>: <?= $userdetail['skype'] ?> </h6>
									<h6><strong> Company Name </strong>: <?= $userdetail['companyname'] ?> </h6>
									<h6><strong> Website </strong>: <?= $userdetail['website'] ?> </h6>
									<h6><strong> Looking </strong>: <?= $userdetail['looking'] ?> </h6>
									<h6><strong> Budget </strong>: <?= $userdetail['budget'] ?> </h6>
									<h6><strong> Description </strong>: <?= $userdetail['description'] ?> </h6>
									
                                </div>
								<?php }elseif($result['type']=="Contact") {
                                  $userdetail = $this->db->where('id',$result['type_id'])->get('contact')->row_array();
								?>
								<div class="col-md-12 detilsss">
								<h6><strong> Name </strong>: <?= $userdetail['name'] ?> </h6>
                                    <h6><strong> Mobile </strong>: <?= $userdetail['mobile'] ?> </h6>
                                    <h6><strong> Email </strong>: <?= $userdetail['email'] ?> </h6>
									<h6><strong> Requirement </strong>: <?= $userdetail['requirement'] ?> </h6>
									<h6><strong> Message </strong>: <?= $userdetail['message'] ?> </h6>
									</div>
								<?php }elseif($result['type']=="Request For Demo") { 
								$userdetail = $this->db->where('id',$result['type_id'])->get('request_demo')->row_array(); ?>
								<div class="col-md-12 detilsss">
								<h6><strong> Name </strong>: <?= $userdetail['name'] ?> </h6>
                                    <h6><strong> Mobile </strong>: <?= $userdetail['mobile'] ?> </h6>
                                    <h6><strong> Email </strong>: <?= $userdetail['email'] ?> </h6>
									<h6><strong> Requirement </strong>: <?= $userdetail['requirement'] ?> </h6>
									<h6><strong> Message </strong>: <?= $userdetail['message'] ?> </h6>
									<h6><strong> Organisation </strong>: <?= $userdetail['organisation'] ?> </h6>
								    <h6><strong> Address </strong>: <?= $userdetail['address'] ?> </h6>
									</div>
								<?php }elseif($result['type']=="Offshore") { 
								$userdetail = $this->db->where('id',$result['type_id'])->get('offshore')->row_array(); ?>
								<div class="col-md-12 detilsss">
								<h6><strong> Name </strong>: <?= $userdetail['name'] ?> </h6>
                                    <h6><strong> Mobile </strong>: <?= $userdetail['mobile'] ?> </h6>
                                    <h6><strong> Email </strong>: <?= $userdetail['email'] ?> </h6>
									<h6><strong> Question </strong>: <?= $userdetail['question'] ?> </h6>
									</div>
								<?php }elseif($result['type']=="Order") { 
								$userdetail = $this->db->where('id',$result['type_id'])->get('order_detail')->row_array(); ?>
								<div class="col-md-12 detilsss">
								<h6><strong> Name </strong>: <?= $userdetail['name'] ?> </h6>
                                    <h6><strong> Mobile </strong>: <?= $userdetail['mobile'] ?> </h6>
                                    <h6><strong> Email </strong>: <?= $userdetail['email'] ?> </h6>
									<h6><strong> Requirement </strong>: <?= $userdetail['requirement'] ?> </h6>
									<h6><strong> Message </strong>: <?= $userdetail['message'] ?> </h6>
									<h6><strong> Organisation </strong>: <?= $userdetail['organisation'] ?> </h6>
								    <h6><strong> Address </strong>: <?= $userdetail['address'] ?> </h6>
									</div> 
								<?php }elseif($result['type']=="Digital Marketing") { 
								$userdetail = $this->db->where('id',$result['type_id'])->get('digital_enquiary')->row_array(); ?>
								<div class="col-md-12 detilsss">
									<h6><strong> Type </strong>: Digital Marketing </h6>
									<h6><strong> Name </strong>: <?= $userdetail['name'] ?> </h6>
                                    <h6><strong> Mobile </strong>: <?= $userdetail['mobile'] ?> </h6>
                                    <h6><strong> Email </strong>: <?= $userdetail['email'] ?> </h6>
									<h6><strong> Website URL </strong>: <?= $userdetail['website_url'] ?> </h6> 
									</div>
								<?php } ?>
                                <div class="col-md-12 folowoow">
                                    <h6>Details</h6>
                                </div>
								
                                 <?php $i= 1; 
									if(empty($res)){ ?> 
                                    <div class="col-md-12" style="padding:0px;">
										<div class="col-md-12  tetst" style="margin-bottom:15px;">
										   <?php echo "No Remark Available at this time"; ?>
										</div>    
									</div>
                                  <?php } else { 
									foreach($res as $res){
								  ?>                                  
                                <div class="col-md-12" style="padding:0px;">
                                    <div class="col-md-12  tetst" style="margin-bottom:15px;">
                                        <p>FollowUp Date : <span><?php echo date('Y-m-d', strtotime($result['followup_date'])); ?></span></p>
                                        <p>Remark : <span><?php echo $res['remark']; ?></span></p>
                                       <?php if($i < $total){ ?>
                                        <hr> 
                                        <?php } ?>     
                                    </div>
                                                
                                </div>
                              <?php } }?>


                                <div class="col-md-12 folowoow">
                                    <h6>Change Status</h6>
                                </div>
                                <div class="col-md-12" style="margin-top:15px;">
                                    <form action="<?= base_url('leads/change_status/'); ?><?= $result['id']; ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="form-control mainradio">
                                                <label><input type="radio" name="status" class="form-control1" Value="1" placeholder="status" id="hide1" <?php if ($result['status'] == '1') { echo "checked"; } ?> /> Close </label>
                                                <label><input type="radio" name="status" class="form-control1" Value="2" placeholder="status" id="hide" <?php if ($result['status'] == '2') { echo "checked";} ?> /> Final </label>
                                                <label><input type="radio" name="status" class="form-control1" Value="3" placeholder="status" id="show" <?php if ($result['status'] == '3') { echo "checked"; } ?> /> Followups </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="followup_date" id="date" class="form-control datepicker" placeholder="Followup Date" style="display:none;" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Remark</label>
                                            <textarea name="remark" required="" class="form-control" placeholder="Remark for Status"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>

                                    </form>
                                </div>

                            </div>

                        </div>

                </div>

        </section>

        <!-- end Radio buttons and checkbox -->
        </div>
        </div>
    </section>

    
    <?php if ($result['status'] == '3') { ?>
        <script>
            $("#date").show();
            $("#date").attr('required', '');
        </script>
    <?php } ?>

    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("#date").hide();
                $("#date").removeAttr('required');
            });
            $("#hide1").click(function() {
                $("#date").hide();
                $("#date").removeAttr('required');
            });
            $("#show").click(function() {
                $("#date").show();
                $("#date").attr('required', '');
            });
        });
    </script>
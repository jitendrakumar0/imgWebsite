

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

                <div class="space"></div>
                <div class="col-md-2">
                  Total Amount - <b><?php echo number_format($totalamount); ?></b>
                </div>
                <div class="space"></div>
                <div class="col-md-2">
                  Unusable Amount (Total GST) - <b><?php echo number_format($gst_amount);?></b>
                </div>
                <div class="space"></div>
                <div class="col-md-2">
                  Remaining Payable GST - <b><?php echo number_format($gst_amount - $paid);?></b>
                </div>
                <div class="space"></div>
                <div class="col-md-2">
                  Usable Amount (After GST) - <b><?php echo number_format($after_gst);?></b>
                </div>
                <div class="space"></div>
                <div class="col-md-2">
                  Total Count -<b> <?php echo $count;?></b>
                </div>
            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('tax/view_tax') ?>"><i class="fa fa-eye"></i> View Tax</a>
            

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

                <span class="glyphicon glyphicon-th"></span> Paid Tax</strong></div>


                <div class="panel-body">

                    <div class="errorsinci">
                </div>

                      <span id="responsesMsg"></span>   
                
                     <form action="<?= base_url('tax/taxpaidsubmit');?>" method="post" enctype="multipart/form-data" name="f3" id="f3">
          <div class="form-group">
            <label for="exampleInputEmail1">Amount <span style="color:red" >*</span></label>
            <input type="text" required name="amount" placeholder="Amount*" value="<?php echo $paid; ?>" class="form-control"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Enter Month <span style="color:red" >*</span></label>
            <input type="text" required name="month" placeholder="Month*" maxlength="2" value="<?php echo $paid; ?>" class="form-control"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Enter Year <span style="color:red" >*</span></label>
            <input type="text" required name="year" placeholder="Year*" maxlength="4" value="<?php echo $paid; ?>" class="form-control"/>
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

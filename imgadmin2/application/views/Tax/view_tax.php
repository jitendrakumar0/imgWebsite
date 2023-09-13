<section id="content" class="content-container">
  <section class="page-form-ele page">
    <?php 
    $start_date="";$end_date="";$fantasy_type="";
    if(isset($_GET['start_date'])){
      $start_date = $_GET['start_date'];
    }
    if(isset($_GET['end_date'])){
      $end_date = $_GET['end_date'];
    } ?>
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
                  Usable Amount (After GST) - <b><?php echo number_format($after_gst);?></b>
                </div>
                <div class="space"></div>
                <div class="col-md-2">
                  Total Count -<b> <?php echo $count;?></b>
                </div>
            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('tax/add_tax') ?>"><i class="fa fa-eye"></i> Add Amount</a>
            

        </div>

    </section>
<section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">
<form action="<?= base_url('tax/view_tax');?>" method="get" enctype="multipart/form-data" name="f3" id="f3">

          <div class="form-group">
            <div class="col-md-3">
            <label for="exampleInputEmail1">Start Date</label>
            <input type="date" required name="start_date" placeholder="Start Date" class="form-control" value="<?php echo $start_date; ?>"/>
          </div>
          <div class="col-md-3">
            <label for="exampleInputEmail1">End Date</label>
            <input type="date" required name="end_date" placeholder="End Date" class="form-control" value="<?php echo $end_date; ?>"/>
          </div>
          </div>

            <div class="form-group text-left">
            <input type="submit" value="Submit" class="btn btn-info" />
          </div>

        </form>
            

        </div>

    </section>


    <div class="row">
      <div class="col-lg-12">
        <!-- Radio buttons and checkbox -->
        <section class="panel panel-default">
          <div class="panel-heading"><strong>
              <span class="glyphicon glyphicon-th"></span> All Projects Amount</strong></div>


          <div class="panel-body">
            <div class="table-responsive">
              <table id="" class="table table-striped table-bordered leads-table"
                style="width:100%">
                <thead>
                  <tr>
                    <th style="width:10%">S No.</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Gst</th>
                    <th>After Gst</th>
                    <th>Date</th>
        <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
          if(!empty($data))
          {
          $s_no=1;
          foreach($data as $value)
          { 
          ?>
                  <tr>
                    <td><?php echo $s_no;?></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->amount?></td>
                    <td><?= round(($value->amount - ($value->amount * 100)/118),2)?></td>
                    <td><?= round((($value->amount * 100)/118),2)?></td>
                    <td><?= date('d-M-Y',strtotime($value->created_at))?></td>
        <td><a href="<?= base_url('tax/delete_tax/'.$value->id); ?>"
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
  </section>

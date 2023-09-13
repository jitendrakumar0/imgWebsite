<section id="content" class="content-container">



    <div class="row">
      <div class="col-lg-12">
        <!-- Radio buttons and checkbox -->
        <section class="panel panel-default">
          <div class="panel-heading"><strong>
              <span class="glyphicon glyphicon-th"></span> All Paid Amount</strong></div>


          <div class="panel-body">
            <div class="table-responsive">
              <table id="" class="table table-striped table-bordered leads-table"
                style="width:100%">
                <thead>
                  <tr>
                    <th style="width:10%">S No.</th>
                    <th>Amount</th>
                    <th>Month</th>
                    <th>Year</th>
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
                    <td><?= $value->amount?></td>
                    <td><?= $value->month?></td>
                    <td><?= $value->year?></td>
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

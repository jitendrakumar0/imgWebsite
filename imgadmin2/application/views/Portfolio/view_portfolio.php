<section id="content" class="content-container">
<section class="page-form-ele page">

   <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

        <div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('portfolio/add_portfolio') ?>"><i class="fa fa-plus-circle"></i> Add Portfolio</a>
            

        </div>

    </section>
   <div class="row">
         <div class="col-lg-12">
            <!-- Radio buttons and checkbox -->
            <section class="panel panel-default">
                <div class="panel-heading"><strong>
        <span class="glyphicon glyphicon-th"></span> View portfolio</strong></div>
 

        <div class="panel-body">
                    <div class="table-responsive">
                <table id="allUser" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>S. No.</th>
                          <th>Title</th>                        
                          <th>Category</th>                        
                          <th>Logo</th>
                          <th>List Image</th>
                          <th>Single Page Image</th>   
                          <th>Sections Image</th>                         
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
           <?php  
              if(!empty($result))
              {
                $s_no=1;
                foreach($result as $result)
                { 
              ?>
                            <tr>
                              <td><?php echo $s_no;?></td>
                              <td><?= $result['title']?></td>                             
                              <td><?= $result['categoryname']?></td>
                              <td>
                                <img src="<?= base_url('images/portfolio/logo/') ?><?= $result['logo']; ?>" style ="width:100px" >
                              </td>                              
                              <td>
                                <img src="<?= base_url('images/portfolio/portfolio_thumb2/') ?><?= $result['image']; ?>" style ="width:100px" >
                              </td>
                              <td>
                                <img src="<?= base_url('images/portfolio/single/portfolio_thumb2/') ?><?= $result['single_image']; ?>" style ="width:100px" >
                              </td>
                              <td>
                                <?php if($result['section_image'] != NULL){?>
                                <img src="<?= base_url('images/portfolio/section/portfolio_thumb2/') ?><?= $result['section_image']; ?>" style ="width:100px">
                                <?php } ?>
                              </td>                                                  
                              <td>
                                <a href="<?= base_url('portfolio/edit_portfolio/'.$result['id']);?>">
                                <button type="button" value="" class="btn btn-info">Edit</button></a>
                                <a onClick="return confirm('Are you sure want to delete this entry.')" href="<?= base_url('portfolio/delete_portfolio/'.$result['id']);?>">
                                <button type="button" value="" class="btn btn-danger">Delete</button></a>
                              </td>                          
                            </tr>
          <?php $s_no++; } ?>
          <?php  } ?>
                    </tbody>
                </table>
   </div>
                </div>
            </section>

            <!-- end Radio buttons and checkbox -->            
        </div>
    </div>
</section>
</section>

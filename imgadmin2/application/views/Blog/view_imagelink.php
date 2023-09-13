<section id="content" class="content-container">
<section class="page-form-ele page">

   <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

        <div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/add_imagelink') ?>"><i class="fa fa-plus-circle"></i> Add Image Link</a>
            

        </div>

    </section>
   <div class="row">
         <div class="col-lg-12">
            <!-- Radio buttons and checkbox -->
            <section class="panel panel-default">
                <div class="panel-heading"><strong>
        <span class="glyphicon glyphicon-th"></span> View Image Link</strong></div>
 

        <div class="panel-body">
                    <div class="table-responsive">
                <table id="allUser" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>S. No.</th>
                          <th>Image</th>
                          <th>Blog Url</th> 
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
                             <td><img src="<?= base_url('images/blogimage/') ?><?= $result['image_name']; ?>" style ="width:100px" ></td>
                             <td><?= base_url('images/blogimage/') ?><?= $result['image_name']; ?></td>                  
                            <td>   
                         <a href="<?= base_url('blog/edit_imagelink/'.$result['id']);?>">
                         <button type="button" value="" class="btn btn-info">Edit</button></a>							
                         <a onClick="return confirm('Are you sure want to delete this entry.')" href="<?= base_url('blog/delete_imagelink/'.$result['id']);?>">
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

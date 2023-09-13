<section id="content" class="content-container">
<section class="page-form-ele page">

   <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

        <div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/author/add_blog_author') ?>"><i class="fa fa-plus-circle"></i> Add Blog Author</a>
            

        </div>

    </section>
   <div class="row">
         <div class="col-lg-12">
            <!-- Radio buttons and checkbox -->
            <section class="panel panel-default">
                <div class="panel-heading"><strong>
        <span class="glyphicon glyphicon-th"></span> View Blog Author</strong></div>
 

        <div class="panel-body">
                    <div class="table-responsive">
                <table id="allUser" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>S.No.</th>
                          <th>Author Name</th>
                          <th>Description</th> 
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php  
							if(!empty($result)){
								$s_no=1;
								foreach($result as $result){
							?>
								<tr>
									<td><?php echo $s_no;?></td>
									<td><?= ucfirst($result['author_name']); ?></td>
									<td><?= $result['description']?></td>                  
									<td><img src="<?php echo base_url('images/blogauthor/'.$result['image']); ?>" style="width:100px" /></td>                  
									<td>
										<a href="<?= base_url('blog/author/update_blog_author/'.$result['id']);?>">
											<button type="button" value="" class="btn btn-info">Edit</button>
										</a>
									</td>                          
								</tr>
						<?php  $s_no++; } } ?>
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

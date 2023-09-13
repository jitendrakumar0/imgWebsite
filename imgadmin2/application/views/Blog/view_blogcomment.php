<section id="content" class="content-container">
<section class="page-form-ele page">

   <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

        <div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/add_blog') ?>"><i class="fa fa-plus-circle"></i> Add Blog</a>
            

        </div>

    </section>
   <div class="row">
         <div class="col-lg-12">
            <!-- Radio buttons and checkbox -->
            <section class="panel panel-default">
                <div class="panel-heading"><strong>
        <span class="glyphicon glyphicon-th"></span> View All Blog Comments</strong></div>
 

        <div class="panel-body">
                    <div class="table-responsive">
                <table id="allUser" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th style="width:5%;">S. No.</th>
                          <th>Blog Title</th>
                          <th style="width:20%;">Comments</th>
                          <th style="width:15%;">Date</th>
                          <th style="width:15%;">Status</th>                          
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
           <?php  
              if(!empty($result))
              {
                $s_no=1;
                foreach($result as $result)
                { $res = $this->db->where('id',$result['blog_id'])->get('blogs')->row_array();
              ?>
                        <tr>
                            <td><?php echo $s_no;?></td>
                            <td><?= $res['title']?></td>
                             <td><?= $result['comment']?></td>
                             <td><?= $result['date_time']?></td>
                             <td><?php if($result['status'] =='1'){ echo'Approve';} else{ ?><span style="background: #c84529;padding: 3px 10px;color: white;">Pending</span><?php } ?></td>
                            <td>
                              <?php if($result['status'] =='0'){ ?>        
  <a href="<?= base_url('blog/comment_status'); ?>/<?php echo $result['id']; ?>/1">
<button class="btn btn-primary">Approve Comment</button>
</a>     
  <?php }else{
    ?>
    <a href="<?= base_url('blog/comment_status'); ?>/<?php echo $result['id']; ?>/0">
<button class="btn btn-danger">Pending Comment</button></a>
    <?php 
    
  } ?>
                          <a href="<?= base_url('blog/view_commentdetail/'.$result['id']);?>">
                         <button type="button" value="" class="btn btn-info">view</button></a>
                         <a onClick="return confirm('Are you sure want to delete this entry.')" href="<?= base_url('blog/delete_blogcomment/'.$result['id']);?>">
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

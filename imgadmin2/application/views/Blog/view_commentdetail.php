<?php 
$root = root();
$name=""; $email=''; $website=''; $comment='';

if(!empty($result))
  { 
    $website=$result['website'];
	 $name=$result['name'];
   $email=$result['email'];
    $comment=$result['comment'];   
	}

?>

<section id="content" class="content-container">

<section class="page-form-ele page">

  <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

				<div class="space"></div>
      <?php $res = $this->db->where('id',$result['blog_id'])->get('blogs')->row_array();    ?>     
      
            <a target="_blank" class="file-input-wrapper btn btn-default  btn-success" href="http://imgglobalinfotech.com/blog/<?php echo $res['urlBlog']; ?>"> Show Blog</a>

        </div>

    </section>

<div class="row">

         <div class="col-lg-12">

            <!-- Radio buttons and checkbox -->

            <section class="panel panel-default">

                <div class="panel-heading"><strong>

				<span class="glyphicon glyphicon-th"></span>View Blog Comments</strong></div>


                <div class="panel-body">

					<div class="errorsinci">
				</div>

					  <span id="responsesMsg"></span>	
				
					  <form method="post" enctype="multipart/form-data">
            
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" value="<?= $name; ?>" readonly>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" value="<?= $email; ?>" readonly>
          </div> 


          <div class="form-group">
            <label for="exampleInputEmail1">Website</label>
            <input type="text" class="form-control" value="<?= $website; ?>" readonly>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Comment Description</label>
            <textarea class="form-control" readonly><?= $comment; ?></textarea>
          </div>
        
        </form>

                </div>

            </section>

            <!-- end Radio buttons and checkbox -->            

        </div>

    </div>

</section>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

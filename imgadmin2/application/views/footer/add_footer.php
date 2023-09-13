<?php
$root = root();
$id = "";
$address = '';
$quicklinks='';
$exclusiveservice='';
$ontrending='';
$otherunits='';
$categories='';
$add='';

if (!empty($result1)) {
  $id = $result1['id'];
  $address = explode('$#',$result1['address']);
  $quicklinks=explode(',',$result1['quicklinks']);
  $exclusiveservice=explode(',',$result1['exclusiveservice']);
  $ontrending=explode(',',$result1['ontrending']);
  $otherunits=explode(',',$result1['otherunits']);
  $categories=explode(',',$result1['categories']);
}
?>

<section id="content" class="content-container">

  <section class="page-form-ele page">

    <!-- <section class="panel panel-default">

      <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

      <div class="panel-body">

        <div class="space"></div>

        <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('footer/view_footer') ?>"><i class="fa fa-eye"></i> View Footer</a>


      </div>

    </section> -->

    <div class="row">

      <div class="col-lg-12">

        <!-- Radio buttons and checkbox -->

        <section class="panel panel-default">

          <div class="panel-heading"><strong>

              <span class="glyphicon glyphicon-th"></span>Add/Update Footer</strong></div>


          <div class="panel-body">

            <div class="errorsinci">
            </div>

            <span id="responsesMsg"></span>

            <form action="<?= base_url('footer/footersubmit'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group field_wrapper">
                <label for="exampleInputEmail1">Contact Info (Address)</label>
                <a href="javascript:void(0);" class="btn btn-success add_button" title="Add field">Add More</a>
                <?php foreach($address as $key => $add){ ?>
                <div class="addressfield">
                <input type="text" name="address[]" class="form-control" required placeholder="Contact Info" value="<?= $add; ?>"> 
                <a href="javascript:void(0);" class="btn btn-danger remove_button">Remove</a>
                </div>
                <?php  }?>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Quick Links</label>
                  <select class="form-control test" name="quicklinks[]"  multiple="multiple" required>
                          <?php  foreach ($result as $res) { ?>
                          <option value="<?= $res['id']; ?>" <?php if(in_array($res['id'],$quicklinks)){echo 'selected';}?>> <?= $res['name']; ?></option>
                          <?php } ?>
                  </select>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Our Exclusive Services</label>
                  <select class="form-control test" name="exclusiveservice[]"  multiple="multiple" required>
                          <?php  foreach ($result as $res) { ?>
                          <option value="<?= $res['id']; ?>" <?php if(in_array($res['id'],$exclusiveservice)){echo 'selected';}?>> <?= $res['name']; ?></option>
                          <?php } ?>
                  </select>
                
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">On Trending</label>
                  <select class="form-control test" name="ontrending[]"  multiple="multiple" required>
                          <?php  foreach ($result as $res) { ?>
                          <option value="<?= $res['id']; ?>" <?php if(in_array($res['id'],$ontrending)){echo 'selected';}?>> <?= $res['name']; ?></option>
                          <?php } ?>
                  </select>
                
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Other Units Of Us</label>
                  <select class="form-control test" name="otherunits[]"  multiple="multiple" required>
                          <?php  foreach ($result as $res) { ?>
                          <option value="<?= $res['id']; ?>" <?php if(in_array($res['id'],$otherunits)){echo 'selected';}?>> <?= $res['name']; ?></option>
                          <?php } ?>
                  </select>
                
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Categories</label>
                  <select class="form-control test" name="categories[]"  multiple="multiple" required>
                          <?php  foreach ($result as $res) { ?>
                          <option value="<?= $res['id']; ?>" <?php if(in_array($res['id'],$categories)){echo 'selected';}?>> <?= $res['name']; ?></option>
                          <?php } ?>
                  </select>
              </div>

              <div class="form-group">
                <input type="hidden" name="id" value="<?= $id; ?>" />
              </div>
              <?php if ($id == '') { ?>
                <div class="form-group text-center">
                  <input type="submit" value="Submit" class="btn btn-info" />
                </div>
              <?php } else { ?>
                <div class="form-group text-center">
                  <input type="submit" value="update" class="btn btn-success" />
                </div>
              <?php } ?>
            </form>

          </div>

        </section>

        <!-- end Radio buttons and checkbox -->

      </div>

    </div>

  </section>

</section>
<script>
    (function($) {
        $(function() {
            $('.test').fSelect();
        });
    })(jQuery);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 3; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper //New input field html 
    var x = 0; //Initial field counter is 1
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        var i =<?php if($_REQUEST['id'] != ''){echo $x+1;}else{echo 2;} ?>;
        if(i < maxField){ 
            $(wrapper).append('<div><input type="text" name="address['+i+']" class="form-control" required placeholder="Contact Info" value=""><a href="javascript:void(0);" class="btn btn-danger remove_button">Remove</a></div>'); //Add field html
            i++
        }
    });

    $(wrapper).on('click','.remove_button',function(){
      console.log($(this));
        $(this).parent().remove();
    });
    
    //Once remove button is clicked
    // $(wrapper).on('click', '.remove_button', function(e){
    //     e.preventDefault();
    //     $(this).parent().remove(); //Remove field html
    //     x--; //Decrement field counter
    // });
});
</script>

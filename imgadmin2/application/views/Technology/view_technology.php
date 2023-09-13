<style>
    /* The switch - the box around the slider */
.switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 24px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 4px;
    bottom: 3px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}


.slider.round {
    border-radius: 4px;
}
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}
/* Rounded sliders */


.slider.round:before {
  border-radius: 0px;
}

</style>

<section id="content" class="content-container">
<section class="page-form-ele page">

   <section class="panel panel-default">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

        <div class="panel-body">

        <div class="space"></div>

            <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('technology/add_technology') ?>"><i class="fa fa-plus-circle"></i> Add Technology</a>
            

        </div>

    </section>
   <div class="row">
         <div class="col-lg-12">
            <!-- Radio buttons and checkbox -->
            <section class="panel panel-default">
                <div class="panel-heading"><strong>
        <span class="glyphicon glyphicon-th"></span> View Technology</strong></div>
 

        <div class="panel-body">
                    <div class="table-responsive">
                <table id="allUser" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th >S. No.</th>
                          <th >Technology name</th>                        
                          <th >Image</th>
                          <th>Status</th>
                          <th >Action</th>
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
                             <td><?= $result['name']?></td>                            
                             <td>
                              <img src="<?= base_url('images/technology/') ?><?= $result['image']; ?>" style ="width:100px" >
                            </td>
                            <td> 
                                <label class="switch">
                                <input type="checkbox" onChange="featured_change('<?php echo $result['id']; ?>')" id="featured<?php echo $result['id']; ?>" value="<?= $result['id']; ?>" <?php if($result['status']==0){echo "unchecked";}else{echo "checked";} ?>>
                                <span class="slider round"></span>
                                </label>                                              
                            </td>                                                       
                            <td>
                          <a href="<?= base_url('technology/edit_technology/'.$result['id']);?>">
                         <button type="button" value="" class="btn btn-info">Edit</button></a>
                         <a onClick="return confirm('Are you sure want to delete this entry.')" href="<?= base_url('technology/delete_technology/'.$result['id']);?>">
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
    <script>
    function featured_change(id)
{

// check checked box
check = $("#featured"+id).is(":checked");

if(check)
{
value='1';
}
else
{
value='0';
}

var table = 'technology';

$.ajax({
url:"<?= base_url('technology/techno_status'); ?>",
data:{
vopll:id,
table:table,
value:value
},
error:function(){alert("error occur")},
success:function(a){



}                                    
});
}
      
               
</script>
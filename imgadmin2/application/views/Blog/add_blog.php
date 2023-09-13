<?php 
$root = root();
$id=""; $blog_image=''; $title=''; $blog_author=''; $blog_date=''; $category=''; $short_description=''; $description=''; $tags_foo=''; $meta_title=''; $meta_keyword=''; $meta_description=''; $faq=''; $background_color=''; $background_color_status='0'; 

	if(!empty($result)){ 
		$id=$result['id'];
		$blog_image=$result['blog_image'];
		$title=$result['title']; 
		$blog_date=$result['blog_date'];
		$category=explode(',',$result['category']);
		$blog_author=explode(',',$result['blog_author']);
        $short_description=$result['short_description'];
		$description=$result['description'];    
		$meta_title=$result['meta_title'];
		$meta_keyword=$result['meta_keyword'];
		$meta_description=$result['meta_description'];
		$tags_foo=explode(',',$result['tags_foo']);
        $faq = $result['faq'];
        $background_color = $result['background_color'];
        $background_color_status = $result['background_color_status'];
	}

?>

<section id="content" class="content-container">

    <section class="page-form-ele page">

        <section class="panel panel-default">

            <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

            <div class="panel-body">

                <div class="space"></div>

                <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('blog/view_blog') ?>"><i class="fa fa-eye"></i> View Blog</a>
                

            </div>

        </section>

        <div class="row">
            <div class="col-lg-12">
                <!-- Radio buttons and checkbox -->
                <section class="panel panel-default">
                    <div class="panel-heading"><strong>
                        <span class="glyphicon glyphicon-th"></span>Add/Update Blog</strong></div>

                        <div class="panel-body">
                            <div class="errorsinci">
                        </div>
                        <span id="responsesMsg"></span>					
                        <form 
                            onsubmit="return is_image_given()"
                            action="<?= base_url('blog/blogsubmit'); ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Category</label>
                                <select class="form-control test" name="category[]"  multiple="multiple" required>
                                    <?php  foreach ($res as $res) { ?>
                                    <option value="<?= $res['id']; ?>" <?php if(in_array($res['id'],$category)){echo 'selected';}?>> <?= $res['title']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" required name="title" placeholder="Title" class="form-control" value="<?php echo $title; ?>"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">URL (slug) <span class="text-danger">*</span></label>
                                <input type="text" required name="urlBlog" placeholder="URL (slug)" class="form-control" value="<?php if(!empty($result)){ echo $result['urlBlog']; } ?>"/>
                            </div>
                    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Author</label>
                                <select class="form-control test" name="blog_author[]"  required>
                                    <?php  foreach ($authors as $author) { ?>
                                    <option value="<?= $author['id']; ?>" <?php if(in_array($author['id'],$blog_author)){echo 'selected';}?> > <?= ucfirst($author['author_name']); ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Date</label>
                                <input type="date" required name="blog_date" placeholder="Blog Date" class="form-control" value="<?php echo $blog_date; ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description</label>
                                <textarea  name="short_description" rows="3" placeholder="Short Description" class="form-control" value=""><?php echo $short_description; ?></textarea>
                            </div>
                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="description" class="form-control ckeditor" required placeholder="Describe yourself here..."><?php echo $description; ?></textarea>
                            </div>     

                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Tags</label>
                                    <select class="form-control testing" name="tags_foo[]"  multiple="multiple" >               
                                    <?php  foreach ($ress as $ress) { ?>
                                    <option value="<?= $ress['id']; ?>" <?php if(in_array($ress['id'],$tags_foo)){echo 'selected';}?>> <?= $ress['tags']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                
                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image Title <span class="text-danger">*</span></label>
                                <input type="text" required name="image_title" placeholder="Image Title" class="form-control" value="<?php if(!empty($result)){ echo $result['title']; } ?>"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image Alt Tag <span class="text-danger">*</span></label>
                                <input type="text" required name="image_alttag" placeholder="Image Alt Tag" class="form-control" value="<?php if(!empty($result)){ echo $result['image_alttag']; } ?>"/>
                            </div>
                    
                            <div class="form-group custom-file-upload" data-crop="true" data-download="true" data-view-location="main-container" data-aspact-ratio="1/1" data-zoom="true" data-rotate="true">
                                <a href="javascript:;" onclick="uploadImg()" class="btn btn-primary">Upload Image</a>
                                <!-- <input id="blogImage" type="file" name="blog_image" <?php //if($blog_image==''){ echo "required"; } ?>  style="border:2px solid #fff; width:100%;"/> -->
                                <input type="hidden" name="blog_image" >
                                <label for="blogImage">Image</label>

                                <?php if($blog_image!='')
                                { ?>
                                <img src="<?= base_url('images/blog/') ?><?= $blog_image; ?>" style="width:100px;" /><br>
                                <?php } ?>
                                
                                <note style="color:#000; font-weight:600;"> Minimum upload size (1080px X 617px)</note>
                            </div>

                            <style>
                                .cropImgModal {
                                    display: none;
                                    position: fixed;
                                    inset: 0px;
                                    z-index: 1000000;
                                }
                                .cropImgModal.active {
                                    display: block;
                                }
                                .cropImgModal a {
                                    position: absolute;
                                    top: 20px;
                                    right: 150px;
                                    z-index: 1000000;
                                }

                            </style>
                            <div class="cropImgModal">
                                <iframe id="blog_image" src="<?php echo base_url('cropjs/cropjs.php?ratio=16/9.14&bgColor=1'); ?>" style="width: 100%; height:100%;" frameborder="0"></iframe>
                            </div>


                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $id; ?>" />
                                <input type="hidden" name="old_image" value="<?= $blog_image; ?>" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Background Color</label>
                                <input type="color"  name="background_color" placeholder="Background Color" class="form-control" value="<?php echo $background_color; ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Background Color Status</label>
                                <select class="form-control" name="background_color_status" >
                                    
                                    <option value="0" <?php if($background_color_status=='0'){echo 'selected';}?> >No</option>
                                    <option value="1" <?php if($background_color_status=='1'){echo 'selected';}?> >Yes</option>
                                    
                                </select>
                            </div>
                    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title</label>
                                <input type="text"  name="meta_title" placeholder="Meta Title" class="form-control" value="<?php echo $meta_title; ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Keyword</label>
                                <input type="text"  name="meta_keyword" placeholder="Meta Keyword" class="form-control" value="<?php echo $meta_keyword; ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description</label>
                                <input type="text"  name="meta_description" placeholder="Meta Description" class="form-control" value="<?php echo $meta_description; ?>"/>
                            </div>

                            <?php if(!empty($faq)){
                                  $faqResult = json_decode($faq,true);
                                  foreach($faqResult as $key=>$faqdata) {   
                            ?>
                            <div id="existing_question<?= $key; ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">FAQ Question</label>
                                    <input type="text"  name="faq_question[]" placeholder="FAQ Question" class="form-control" value="<?= $faqdata['question']; ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">FAQ Answer</label>
                                    <textarea  name="faq_answer[]" rows="3" placeholder="FAQ Answer" class="form-control" value=""><?= $faqdata['answer']; ?></textarea>
                                </div>

                                <button class="btn btn-danger" id="" onclick="remove_existing(<?= $key; ?>)" type="button"><i class="bi bi-trash"></i> Delete</button>
                            </div>
                            
                            <?php } } ?>    

                            <div class="form-group">
                                <label for="exampleInputEmail1">FAQ Question</label>
                                <input type="text"  name="faq_question[]" placeholder="FAQ Question" class="form-control" value=""/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">FAQ Answer</label>
                                <textarea  name="faq_answer[]" rows="3" placeholder="FAQ Answer" class="form-control" value=""></textarea>
                            </div>

                            <div id="newinput"></div>
                            <button id="rowAdder" type="button" class="btn btn-dark">
                                <span class="bi bi-plus-square-dotted">
                                </span> ADD
                            </button>


                            <?php if($blog_image==''){ ?>
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
<script>
    (function($) {
        $(function() {
            $('.testing').fSelect();
        });
    })(jQuery);

    function uploadImg() {
        $(".cropImgModal").addClass("active");
    }
    // var x = $("iframe");
    // const x = document.getElementById("blog_image");
    // const x2 = x.contentWindow;
    // const u = x2.document;
    // console.log(u);
    
    var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
    var eventer = window[eventMethod];
    var messageEvent = (eventMethod == "attachEvent" ? "onmessage" : "message");
    eventer(messageEvent,function(e){
        var data = e.data;
        console.log(data);
        if(Object.keys(data).length){
            if(data.y==1){
                $('input[name=blog_image]').val(data.x);
                $('.cropImgModal').removeClass('active');
            }else{
                $('.cropImgModal').removeClass('active');
            }
            
        }
        // alert(data);
    });
    

</script>

<script>
    function is_image_given() {
        var image = $('input[name=blog_image]').val();
        var old_image = $('input[name=old_image]').val();

        if (old_image != '' || image != '') {
            return true;
        } else {

            alert('Blog image is required.');

            return false;
        }
    }

        $("#rowAdder").click(function () {
            newRowAdd =
            '<div id="row"> <div class="form-group">'+
                                '<label for="exampleInputEmail1">FAQ Question</label>'+
                                '<input type="text"  name="faq_question[]" placeholder="FAQ Question" class="form-control" value=""/>'+
                            '</div>'+
                            '<div class="form-group">'+
                                '<label for="exampleInputEmail1">FAQ Answer</label>'+
                                '<textarea  name="faq_answer[]" rows="3" placeholder="FAQ Answer" class="form-control" value=""></textarea>'+
                            '</div>'+
                            '<div class="input-group-prepend">' +
                '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                '<i class="bi bi-trash"></i> Delete</button> </div></div>';
            $('#newinput').append(newRowAdd);
        });
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });

        function remove_existing(removeid){
            $('#existing_question'+removeid).remove();
        }
    
</script>

<?php include 'layouts/header-link.php' ?>


<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-auto mb-3">
            <div class="custom-file-upload" data-crop="true" data-download="false" bgChecker="<?php echo ((isset($_GET['bgColor']))?$_GET['bgColor']:0); ?>" data-aspact-ratio="<?php echo ((isset($_GET['ratio']))?$_GET['ratio']:'free'); ?>" data-view-location="kuchbhi" data-zoom="true" data-rotate="true">
                <input type="file" class="form-control" placeholder="" id="upload-button" data-type="<?php echo ((isset($_GET['type']))?$_GET['type']:''); ?>" accept=".png, .jpg, .jpeg, .webp, .gif">
                <label for="upload-button">
                    <span>
                        <strong>
                            <i class="imgs img-cloud-upload-alt"></i>
                            <i>Please upload a photo.</i>
                        </strong>
                    </span>
                </label>
                <div class="invalid-feedback">Please attached your Image/Photo with your id proof and generated code.</div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <a onclick="goBack();" class="btn btn-primary w-100 rounded-pill text-white font-weight-bold">Go Back</a>
                </div>
            </div>
        </div>
        <!-- <div class="p-0 overflow-hidden position-relative right-n20px profile_pic custom-file-upload" data-crop="true" data-download="true" data-view-location="kuchbhi" data-aspact-ratio="free" data-zoom="true" data-rotate="true">
            <input id="upload-button" data-type="<?php // echo ((isset($_GET['type']))?$_GET['type']:''); ?>" class="d-none" required accept=".png, .jpg, .jpeg" type="file">
            <label for="upload-button" style="background: url(assets/img/team/3.png);"></label>
            <br>
        </div> -->
    </div>
</div>
<script>
    // function test(){
        
    // }
    // $('#upload-button').change(function(){
    //     let x = $("[for=upload-button]").css('background-image');
    //     var obj = {};
    //     obj.x = x;
    //     obj.y = 1;
    //     window.parent.postMessage(obj,"*");
    // });
    function goBack(){
        var obj = {};
        obj.y = 3;
        window.parent.postMessage(obj,"*");
    }
</script>
<?php include 'layouts/footer-link.php' ?>
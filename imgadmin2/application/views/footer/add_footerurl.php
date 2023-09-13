<?php
$root = root();
$id = "";
$url = '';
$name = '';

if (!empty($result)) {
  $id = $result['id'];
  $url = $result['url'];
  $name = $result['name'];
}

?>

<section id="content" class="content-container">

  <section class="page-form-ele page">

    <!-- <section class="panel panel-default">

      <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

      <div class="panel-body">

        <div class="space"></div>

        <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('footer/view_footerurl') ?>"><i class="fa fa-eye"></i> View Footer Url</a>


      </div>

    </section> -->

    <div class="row">

      <div class="col-lg-12">

        <!-- Radio buttons and checkbox -->

        <section class="panel panel-default">

          <div class="panel-heading"><strong>

              <span class="glyphicon glyphicon-th"></span>Add/Update Url</strong></div>


          <div class="panel-body">

            <div class="errorsinci">
            </div>

            <span id="responsesMsg"></span>

            <form action="<?= base_url('footer/footerurlsubmit'); ?>" method="post" enctype="multipart/form-data">


              <div class="form-group">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Page Name</label>
                  <input type="text" name="name" class="form-control" required placeholder="Name" value="<?= $name; ?>">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Page Url</label>
                  <input type="text" name="url" class="form-control" required placeholder="URL" value="<?= $url; ?>">
                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
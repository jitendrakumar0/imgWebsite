<?php
$root = root();
$id = "";
$facebookurl = '';
$facebookfollower = '';
$twitterurl = '';
$twitterfollower = '';
$instagramurl = '';
$instagramfollower = '';
$youtuberurl = '';
$youtubesubscriber = '';
$linkedinurl = '';
$linkedinfollower = '';

if (!empty($result)) {
  $id = $result['id'];
  $facebookurl = $result['facebookurl'];
  $facebookfollower = $result['facebookfollower'];
  $twitterurl = $result['twitterurl'];
  $twitterfollower = $result['twitterfollower'];
  $instagramurl = $result['instagramurl'];
  $instagramfollower = $result['instagramfollower'];
  $youtuberurl = $result['youtuberurl'];
  $youtubesubscriber = $result['youtubesubscriber'];
  $linkedinurl = $result['linkedinurl'];
  $linkedinfollower = $result['linkedinfollower'];
}

?>

<section id="content" class="content-container">

  <section class="page-form-ele page">

    <!-- <section class="panel panel-default">

      <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Go To</strong></div>

      <div class="panel-body">

        <div class="space"></div>

        <a class="file-input-wrapper btn btn-default  btn-success" href="<?= base_url('footer/view_socialmedia') ?>"><i class="fa fa-eye"></i> View SocialMedia</a>


      </div>

    </section> -->

    <div class="row">

      <div class="col-lg-12">

        <!-- Radio buttons and checkbox -->

        <section class="panel panel-default">

          <div class="panel-heading"><strong>

              <span class="glyphicon glyphicon-th"></span>Add/Update SocialMedia</strong></div>

          <div class="panel-body">

            <div class="errorsinci">
            </div>

            <span id="responsesMsg"></span>

            <form action="<?= base_url('footer/socialmediasubmit'); ?>" method="post" enctype="multipart/form-data">


              <div class="form-group">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Facebook Url</label>
                  <input type="url" name="facebookurl" class="form-control" required placeholder="URL" value="<?= $facebookurl; ?>">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Facebook Follower</label>
                  <input type="text" name="facebookfollower" class="form-control" required placeholder="5M" value="<?= $facebookfollower; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Twitter Url</label>
                  <input type="url" name="twitterurl" class="form-control" required placeholder="URL" value="<?= $twitterurl; ?>">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Twitter Follower</label>
                  <input type="text" name="twitterfollower" class="form-control" required placeholder="5M" value="<?= $twitterfollower; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Instagram Url</label>
                  <input type="url" name="instagramurl" class="form-control" required placeholder="URL" value="<?= $instagramurl; ?>">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Instagram Follower</label>
                  <input type="text" name="instagramfollower" class="form-control" required placeholder="5M" value="<?= $instagramfollower; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Youtube Url</label>
                  <input type="url" name="youtuberurl" class="form-control" required placeholder="URL" value="<?= $youtuberurl; ?>">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Youtube Follower</label>
                  <input type="text" name="youtubesubscriber" class="form-control" required placeholder="5M" value="<?= $youtubesubscriber; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">LinkedIn Url</label>
                  <input type="url" name="linkedinurl" class="form-control" required placeholder="URL" value="<?= $linkedinurl; ?>">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputEmail1">LinkedIn Follower</label>
                  <input type="text" name="linkedinfollower" class="form-control" required placeholder="5M" value="<?= $linkedinfollower; ?>">
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
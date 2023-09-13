  <div class="main-container">
  	<aside id="nav-container" class="nav-container nav-vertical" style='background:linear-gradient(120deg,#0a7f84 25%,#6e4593 85%);' data-ng-class="{'nav-fixed': main.fixedSidebar,'bg-light': ['31','32','33','34','35','36'].indexOf(main.skin) >= 0,'bg-dark': ['31','32','33','34','35','36'].indexOf(main.skin) < 0}">
  		<div class="nav-wrapper">
  			<ul id="nav" class="nav" data-slim-scroll data-accordion-nav data-highlight-active>
  				<?php if ($this->session->userdata('store100type') == 'master_user') { ?>
  					<li><a href="<?php echo base_url('Home'); ?>"><i class="fa fa-dashboard"><span class="icon-bg bg-info"></span></i>
  							<span class="mainspanclass" data-translate="">Dashboard</span> </a>
  					</li>
					<li><a href="javascript:void(0);"><i class="fa fa-cubes"> <span class="icon-bg bg-danger"></span></i>
  							<span class="mainspanclass" data-translate="">Fantasybox</span> </a>
  						<ul>
						  	<li><a href="<?php echo base_url('Fantasybox/fantasy_contacts'); ?>"><i class="fa fa-circle"><span class="icon-bg bg-info"></span></i>
  								<span class="mainspanclass" data-translate="">Contacts</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-sliders"> <span class="icon-bg bg-danger"></span></i>
  							<span class="mainspanclass" data-translate="">Slider</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('slider/add_slider'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Slider</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('slider/view_slider'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Slider</span> </a>
  							</li>
  						</ul>
  					</li>
  				<?php } ?>

  				<?php if ($this->session->userdata('store100type') == 'master_user' || $this->session->userdata('store100type') == 'blog_user') { ?>
  					<li><a href="javascript:void(0);"><i class="fa fa-fw fa-rss"> <span class="icon-bg bg-success"></span></i>
  							<span class="mainspanclass" data-translate="">Blog</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('blog/add_blogcategory'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Category</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/view_blogcategory'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Category</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/add_blogtag'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Tag</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/view_blogtag'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Tag</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/add_imagelink'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Image Link</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/view_imagelink'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Image Link</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/author/add_blog_author'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Author</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/author/view_blog_author'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Author</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/add_blog'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Blog</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/view_blog'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Blog</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('blog/view_blogcomment'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View All Comments</span> </a>
  							</li>
  						</ul>
  					</li>
  				<?php } ?>

  				<?php if ($this->session->userdata('store100type') == 'master_user') { ?>
  					<li><a href="javascript:void(0);"><i class="fa fa-globe"> <span class="icon-bg bg-warning"></span></i>
  							<span class="mainspanclass" data-translate="">Website Type</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('webtype/add_webtype'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Website Type</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('webtype/view_webtype'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Website Type</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-laptop"> <span class="icon-bg bg-success"></span></i>
  							<span class="mainspanclass" data-translate="">Technology</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('technology/add_technology'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Technology</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('technology/view_technology'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Technology</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-fw fa-folder-open"> <span class="icon-bg bg-danger"></span></i>
  							<span class="mainspanclass" data-translate="">Portfolio</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('portfolio/add_portfoliocategory'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Category</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('portfolio/view_portfoliocategory'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Category</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('portfolio/add_portfolio'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Portfolio</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('portfolio/view_portfolio'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Portfolio</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-comments-o"> <span class="icon-bg bg-success"></span></i>
  							<span class="mainspanclass" data-translate="">Testimonial</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('testimonial/add_testimonial'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Testimonial</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('testimonial/view_testimonial'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Testimonial</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-globe"> <span class="icon-bg bg-warning"></span></i>
  							<span class="mainspanclass" data-translate="">Footer</span> </a>
  						<ul>
						  	<li><a href="<?php echo base_url('footer/add_socialmedia'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add/Edit Socialmedia</span> </a>
  							</li>
						  	<li><a href="<?php echo base_url('footer/add_footerurl'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Url</span> </a>
  							</li>
							<li><a href="<?php echo base_url('footer/view_footerurl'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Url</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('footer/add_footer'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add /Edit Footer</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-fw fa-cloud"> <span class="icon-bg bg-warning"></span></i>
  							<span class="mainspanclass" data-translate="">Tag Cloud</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('tagcloud/add_tagcloud'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Tag Cloud</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('tagcloud/view_tagcloud'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Tag Cloud</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-briefcase"><span class="icon-bg bg-success"></span></i>
  							<span class="mainspanclass" data-translate="">Current Opening</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('currentopening/addcurrentopening'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Current Opening</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('currentopening/viewcurrentopening'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Current Opening</span> </a>
  							</li>
  						</ul>
  					</li>
  				<?php } ?>

  				<?php if ($this->session->userdata('store100type') != 'blog_user') { ?>
  					<li><a href="javascript:void(0);"><i class="fa fa-bandcamp"><span class="icon-bg bg-danger"></span></i>
  							<span class="mainspanclass" data-translate="">Leads</span> </a>
  						<ul>
  							<?php if ($this->session->userdata('store100type') == 'master_user') { ?>
  								<li><a href="<?php echo base_url('leads/add_leads'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  										<span class="mainspanclass" data-translate="">Add Leads</span> </a>
  								</li>
  							<?php } ?>
  							<li><a href="<?php echo base_url('leads/view_leads'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View All Leads</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('leads/view_all_reject'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">All Reject</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('leads/view_all_upcoming_leads'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">All Upcoming</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('leads/view_all_approved'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">All Approved</span> </a>
  							</li>
  						</ul>
  					</li>
  				<?php } ?>

  				<?php if ($this->session->userdata('store100type') == 'neeraj_user') { ?>
  					<li><a href="javascript:void(0);"><i class="fa fa-bandcamp"><span class="icon-bg bg-danger"></span></i>
  							<span class="mainspanclass" data-translate="">Check Tax</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('tax/add_tax'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Amount</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('tax/view_tax'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Amount</span> </a>
  							</li>

  							<li><a href="<?php echo base_url('tax/paidtax'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Paid Tax</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('tax/view_paidtax'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Paid Tax</span> </a>
  							</li>
  						</ul>
  					</li>
  				<?php } ?>

  				<?php if ($this->session->userdata('store100type') == 'master_user') { ?>
  					<li><a href="javascript:void(0);"><i class="fa fa-sitemap"><span class="icon-bg bg-success"></span></i>
  							<span class="mainspanclass" data-translate="">Sitemap Url</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('sitemap/add_sitemap'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Sitemap Url</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('sitemap/view_sitemap'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Sitemap Url</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-envelope"><span class="icon-bg bg-warning"></span></i>
  							<span class="mainspanclass" data-translate="">Admin Email</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('adminemail/add_adminemail'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Admin Email</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('adminemail/view_adminemail'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Admin Email</span> </a>
  							</li>
  						</ul>
  					</li>

  					<li><a href="javascript:void(0);"><i class="fa fa-users"><span class="icon-bg bg-warning"></span></i>
  							<span class="mainspanclass" data-translate="">Team</span> </a>
  						<ul>
  							<li><a href="<?php echo base_url('team/add_team'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">Add Team</span> </a>
  							</li>
  							<li><a href="<?php echo base_url('team/view_team'); ?>"><i class="fa fa-circle"> <span class=""></span></i>
  									<span class="mainspanclass" data-translate="">View Team</span> </a>
  							</li>
  						</ul>
  					</li>
  				<?php } ?>

  			</ul>
  		</div>
  	</aside>
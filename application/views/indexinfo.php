<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>FitnessOnline</title>
    <meta name="description" content="">	
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="<?php echo base_url(); ?>assets/css/presets/preset1.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">
	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header2" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand">
					    <a href="index.html">
					    	<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
	                    </li>
						<li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ebook <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                            <li><a href="about.html">Ebook1</a></li>
		                            <li><a href="service.html">Ebook2</a></li> 
		                        </ul>
	                    	</div>
	                    </li>
						<!-- li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                            <li><a href="portfolio-classic.html">Portfolio Classic</a></li>
		                            <li><a href="portfolio-static.html">Portfolio Static</a></li>
		                            <li><a href="portfolio-item.html">Portfolio Single</a></li>
		                        </ul>
	                    	</div>
	                    </!-->
	                    <li class="dropdown">
                       		<a href="<?php echo base_url();?>info/aboutfit" >About </a>
                       		 
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?php echo base_url();?>auth/select_registration" >Registration </a>
                       		 
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?php echo base_url();?>info/contact" >Contact </a>
                       		 
	                    </li>
            			<li>
							<a href="<?php echo base_url();?>auth/login"><span class="glyphicon glyphicon-log-in"></span> <?=label("strLogin"); ?></a>
						</li>
						<li>
							<a href="<?php echo base_url();?>auth/logout"></span> Logout</a>
						</li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

	<!-- Slider start -->
	<section id="home" class="no-padding">	<!--cd-hero copy.css -->

    	<div id="main-slide" class="ts-flex-slider"> <!--cd-hero copy.css -->

			<div class="flexSlideshow flexslider">
				<ul class="slides">
					<li>
						<div class="overlay2"><!--cd-hero copy.css -->
							<img class="" src="<?php echo base_url(); ?>assets/images/slider/bg1.jpg" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                    		<h2 class="animated2">
	                        		Fitness Online The Future!
	                        	</h2>
	                            <h3 class="animated3">
	                            	We Making Difference To Great Things Possible
	                            </h3>
	                            <p class="animated4"><a href="#" class="slider btn btn-primary white">Check Now</a></p>
	                        </div>
	                    </div>
					</li>
					<li>
						<div class="overlay2"> <!--cd-hero copy.css -->
							<img class="" src="<?php echo base_url(); ?>assets/images/slider/bg2.jpg" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                            <h2 class="animated4">
	                                How Big Can You Dream?
	                            </h2>
	                            <h3 class="animated5">
	                            	We are here to make it happen
	                            </h3>		
	                        </div>
	                    </div>
					</li>
					<li>
						<div class="overlay2"> <!--cd-hero copy.css -->
							<img class="" src="<?php echo base_url(); ?>assets/images/slider/bg3.jpg" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                            <h2 class="animated7"> <!--style.css-->
	                                Your Challenge is Our Progress
	                            </h2>
	                            <h3 class="animated8"> <!--style.css-->
	                            	So, You Don't Need to Go Anywhere Today
	                            </h3>		
	                            <div class="">
	                                <a class="animated4 slider btn btn-primary btn-min-block white" href="#">Get Now</a><a class="animated4 slider btn btn-primary btn-min-block solid" href="#">Live Demo</a>
	                            </div>     
	                        </div>
	                    </div>
					</li>
				</ul>
			</div>
		</div><!--/ Main slider end -->    	
    </section> <!--/ Slider end -->

    <!-- About tab start -->
	<section id="about" class="about angle">
		<div class="container">
			<div class="row">
				<div class="landing-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
					  	<li class="active">
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<span class="tab-icon"><i class="fa fa-info"></i></span>
					  			<div class="tab-info">
						  			<h3>Who Are We</h3>
					  			</div>
					  		</a>
					  	</li>
					  	<!--li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-briefcase"></i></span>
					  			<div class="tab-info">
						  			<h3>Our Company</h3>
					  			</div>
						  	</a>
						</li-->
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-users"></i></span>
					  			<div class="tab-info">
						  			<h3>What We Do</h3>
					  			</div>
						  	</a>
						</li>
						<!--li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-pagelines"></i></span>
					  			<div class="tab-info">
						  			<h3>Modern Design</h3>
					  			</div>
						  	</a>
						</!--li>
						<li
						  	<a class="animated fadeIn" href="#tab_e" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-support"></i></span>
					  			<div class="tab-info">
						  			<h3>Dedicated Support</h3>
					  			</div>
						  	</a>
						</li-->
					</ul>
					<div-- class="tab-content col-md-9 col-sm-7">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<i class="fa fa-trophy big"></i>
				            <h3>We Are Awwared Winning Company</h3> 
				            <p></p>
				        </div>
				        <!--div class="tab-pane animated fadeInLeft" id="tab_b">
				        	<i class="fa fa-briefcase big"></i>
				            <h3>We Have Worldwide Business</h3> 
							<p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro, Etsy VHS kitsch actually messenger bag pug. Pbrb semiotics try-hard, Schlitz occupy dreamcatcher master cleanse Marfa Vice tofu. </p>							 
				        </div-->
				        <div class="tab-pane animated fadeIn" id="tab_c">
				            <i class="fa fa-users big"></i>
				            <h3>We Build Readymade Applications</h3> 
				            <p></p>
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_d">
				            <i class="fa fa-pagelines big"></i>
				            <h3>Clean and Modern Design</h3> 
				            <p></p>
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_e">
				            <i class="fa fa-support big"></i>
				            <h3>24/7 Dedicated Support</h3> 
				            <p></p>
				        </div>
					</div><!-- tab content -->
	    		</div><!-- Overview tab end -->
			</div><!--/ Content row end -->
		</div><!-- Container end -->
	</section><!-- About end -->
	
	<!-- Product start -->
	<section id="product" class="product">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-pinterest"></i></span>
					<h2 class="title">Product<span class="title-desc">A Product</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-6 col-sm-12">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
                        <a href="webboard/forum_fitness"><img src="<?php echo base_url(); ?>assets/images/team/Gym-Header-2.jpg" alt=""></a>
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Fitness</h3>
							<p>about fitness center.</p> 
						</div>
					</div>	
				</div><!--/ Team 1 end -->
				<div class="col-md-6 col-sm-12">
					<div class="team wow slideInRight">
						<div class="img-hexagon">
                        <a href="webboard/index_forum"><img src="<?php echo base_url(); ?>assets/images/team/trainer_2.jpg" alt=""></a>
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Trainer</h3>
							<p>about trainer</p> 
						</div>
					</div>
				</div><!--/ Team 2 end -->
				 
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section><!--/ product end -->

	

	<!-- Team start -->
	<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4 years experience</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="<?php echo base_url(); ?>assets/images/team/team1.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Vosgi Varduhi</h3>
							<p>Trainer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>	
				</div><!--/ Team 1 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="<?php echo base_url(); ?>assets/images/team/team2.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Robert Aleska</h3>
							<p>Trainer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 2 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInRight">
						<div class="img-hexagon">
							<img src="<?php echo base_url(); ?>assets/images/team/team3.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Taline Voski</h3>
							<p>Trainer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 3 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team animate wow slideInRight">
						<div class="img-hexagon">
							<img src="<?php echo base_url(); ?>assets/images/team/team4.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Alban Spencer</h3>
							<p>Trainer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 4 end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section><!--/ Team end -->
 
 
	<!-- Footer start -->
	<footer id="footer" class="footer footer2">
		<div class="container">

			<div class="row">

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Flickr Photos</h3>

					<div class="img-gallery">
						<div class="img-container">
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/1.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/2.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/3.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/4.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/5.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/6.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/7.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/8.jpg" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="<?php echo base_url(); ?>assets/images/gallery/9.jpg" alt="">
							</a>
						</div>
					</div>

						
				</div><!--/ end flickr -->



				<div class="col-md-6 col-sm-12 footer-widget footer-about-us">
					<h3 class="widget-title">About Fitnessonline</h3> 
					<p><strong>Address: </strong>91/17 Watthana niwet soi 4,Sam Sen Nok,Khet Huai Khwang,Bangkok 10310</p>
					<div class="row">
						<div class="col-md-6">
							<strong>Email: </strong>
							<p>info@fitnessonline.com</p>
						</div>
						<div class="col-md-6">
							<strong>Phone No.</strong>
							<p>0-2276-5763</p>
						</div>
					</div>
					<br/>
	</div><!--/ end about us -->




			</div><!-- Row end -->
		</div><!-- Container end -->
	</footer><!-- Footer end -->
	

	<!-- Footer start -->
	<section id="copyright" class="copyright angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="footer-social unstyled">
						<li>
							<a title="Twitter" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Facebook" href="https://www.facebook.com/FitnessOnline.VS/">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="linkedin" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Pinterest" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
							</a>
							<a title="Dribble" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
							</a>
						</li>
					</ul>
				</div>
			</div><!--/ Row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info">
         			 &copy; Copyright 2019 
        			</div>
				</div>
			</div><!--/ Row end -->
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Footer end -->

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/style-switcher.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/cd-hero.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/isotope.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ini.isotope.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/smoothscroll.js"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	</div><!-- Body inner end -->
</body>
</html>
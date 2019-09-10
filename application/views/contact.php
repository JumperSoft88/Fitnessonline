<!DOCTYPE html>
<html lang="en">
<head>

	<?php include("template/head_page.php") ?>

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
						<li class="dropdown">
                            <a href="<?php echo base_url(); ?>"><?=label("strHome"); ?></a>
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
	                    <li class="dropdown " >
                       		<a href="<?php echo base_url();?>info/aboutfit" >About </a>
                       		 
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?php echo base_url();?>auth/select_registration" >Registration </a>
                       		 
	                    </li>
	                    <li class="dropdown active">
                       		<a href="<?php echo base_url();?>info/contact" >Contact </a>
                       		 
	                    </li>
            			<li >
                            <a href="<?php echo base_url();?>auth/logout">Login</a>
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
	<!-- Team start -->
	<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Contact us<span class="title-desc">Contact us</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-6 col-sm-12">
					<div class="team wow slideInLeft">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.713864109727!2d100.57795131483098!3d13.796114990318847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDQ3JzQ2LjAiTiAxMDDCsDM0JzQ4LjUiRQ!5e0!3m2!1sen!2sth!4v1516804942564" width="550" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>	
				</div><!--/ Team 1 end -->
				<div class="col-md-6 col-sm-12">
					<div class="team wow slideInRight">
                        <form method="POST" action="contact_conn.php">
                    `        <div class="form-group">
                                <input type="text" class="form-control" name="name_contact" id="name_contact" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email_contact" id="email_contact" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone_contact" id="phone_contact" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message_contact" id="message_contact" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-default" type="submit" name="button">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> ส่ง
                            </button>
                        </form>`
					</div>
				</div><!--/ Team 2 end -->
				 
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section><!--/ Team end -->
 
 
		<!-- Footer start -->
		<?php include("template/footer_page.php") ?>
		<!--/ Footer end -->

	</div><!-- Body inner end -->
</body>
</html>
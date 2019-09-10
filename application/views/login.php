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
	                    <li class="dropdown" >
                       		<a href="<?php echo base_url();?>info/aboutfit" >About </a>
                       		 
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?php echo base_url();?>auth/select_registration" >Registration </a>
                       		 
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?php echo base_url();?>info/contact" >Contact </a>
                       		 
	                    </li>
            			<li class="active">
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


	<!-- login start -->
	<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Login <span class="title-desc">สมาชิกเข้าสู่ระบบการทำงาน</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-12 col-sm-12">
					<div class="team wow slideInLeft">
                        <form class="form-horizontal" method="POST" action="login" >
                            <fieldset>
                                <!-- Form Name -->
                                <legend>เข้าสู่ระบบ</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label"   ></label>
                                    <div class="col-md-4">
                                        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

                                    </div>
                                </div>
                                <!-- Text input (member_username)-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="member username" >ชื่อผู้ใช้งาน</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user">
                                                </i>
                                            </div>
                                            <input id="member_username" name="member_username" type="text" placeholder="Username" class="form-control input-md">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input (password)-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">รหัสผ่าน</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user">
                                                </i>
                                            </div>
                                            <input id="password" name="password" type="password" placeholder="password" class="form-control input-md">
                                        </div>
                                        <div id="member_password_error"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" ></label>
                                    <div class="col-md-4">
                                        <!--a class="btn btn-success" name="register_btn" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> สมัคร</a>
                                        <a class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a-->

                                        <button type="submit" class="btn btn-success btn-lg" name="register" >เข้าสู่ระบบ</button>
                                        <button type="button" class="btn btn-danger btn-lg" name="Submit2"  onclick="history.back();">ยกเลิก</button>


                                    </div>
                                </div>
                            </fieldset>
                        </form>
					</div>	
				</div><!--/ end -->
				 
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section><!--/ login end -->
 
 
		<!-- Footer start -->
		<?php include("template/footer_page.php") ?>
		<!--/ Footer end -->

	</div><!-- Body inner end -->
</body>
</html>
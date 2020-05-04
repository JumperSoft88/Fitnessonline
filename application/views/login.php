<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fitnessonline</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <link href="<?php echo base_url(); ?>/assets/css/fitness_styles_topmenu.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>/assets/css/4.0.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template styles-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/cd-hero.css"> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
    
    <style>
        .blog .carousel-indicators {
        left: 0;
        top: auto;
        bottom: -40px;

        }

        /* The colour of the indicators */
        .blog .carousel-indicators li {
            background: #a3a3a3;
            border-radius: 50%;
            width: 8px;
            height: 8px;
        }

        .blog .carousel-indicators .active {
        background: #707070;
        }


        .social-login{
            text-align:center;
            font-size:12px;
        }
        .social-login p{
            margin:15px 15px;
        }
        .social-login ul{
            margin:0;
            padding:0;
            list-style-type:none;
        }
        .social-login ul li{
            width:50%;
            float:left;
            clear:fix;
        }
        .social-login ul li a{
            font-size:13px;
            color:#fff;
            text-decoration:none;
            padding:10px 0;
            display:block;
        }
        .social-login ul li:nth-child(1) a{
            background:#3b5998;
        }
        .social-login ul li:nth-child(2) a{
            background:#e74c3d;
        }
        .social-login ul li:nth-child(3) a{
            background:#3698d9;
        }
    </style>
    <script>
        // optional
        $('#blogCarousel').carousel({
                interval: 5000
        });
    </script>
 
    <!--?php
        include ("template/topmenu.php");
    ?-->
    <?php if(isset($message)){  ?>
        <script>
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
        </script>

        <!--?php
            include ("template/topmenu.php");
        ?-->
        <div class="modal" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <p><?php echo $message ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="fixed-top">
        <header class="topbar" > <!-- style="background-image: url(<!-?php echo base_url(); ?>assets/images/logo/back_header.png)" -->
            <div class="container">
                <div class="row">
                <!-- social icon-->
                <div class="col-sm-12">
                    <ul class="social-network" >  
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear" >
            <div class="container">
                <a class="navbar-brand" rel="nofollow" target="_blank" style="text-transform: uppercase;"> <img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="190" height="40" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">

                    <li class="nav-item ">
                        <a href="<?php echo base_url(); ?>" class="nav-link" >HOME
                        <!-- <span class="sr-only">(current)</span> -->
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUNT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICE</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">JOIN</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>login">LOGIN</a>
                    </li> 
                    </ul>
                </div>
                </div>
        </nav>  
    </div>
<body >  
    <br> <br> <br> <br> <br> 
        
        <div class="row">
            <div class="col-md-7 col-sm-12"> 
                <img  style="width:800px;height:448px;" class="" src="<?php echo base_url(); ?>/assets/images/login/login01.jpg">
            </div>
            <div class="col-md-4 col-sm-12">   
                
                    <div class="social-login">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="<?php echo ($tab == 'tab1') ? 'active' : ''; ?>" > 
                                <a class="nav-link active" data-toggle="tab" href="#login" value="login">Login</a>
                            </li>
                            <li class="<?php echo ($tab == 'tab2') ? 'active' : ''; ?>" > 
                                <a class="nav-link" data-toggle="tab" href="#user" value="signup">Sign up</a>
                            </li> 
                        </ul> 
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="login" class="container tab-pane active"><br>
                                <h3>Login</h3>
                                <input type="text" class="form-control" id="loggin" name="loggin" value="loggin" hidden>
                                <div class="form-group">
                                    <label for="usr">Name:</label>
                                    <input type="text" class="form-control" id="username1" name="username1" >
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" name="pwd">
                                </div>
                                <button class="btn btn-primary" name="type" value="login"><i class="fa fa-user"></i> LOGIN</button>
                            </div>
                            <div id="user" class="container tab-pane fade"><br>
                                <h3>Sign up</h3>
                                <!-- <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                                <input type="text" class="form-control" id="signup" name="signup" value="signup" hidden>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="signup_email" name="signup_email">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Name:</label>
                                    <input type="text" class="form-control" id="signup_username" name="signup_username">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="signup_password" name="signup_password">
                                </div>
                                <button class="btn btn-primary" name="type" value="signup" onclick=""><i class="fa fa-user"></i> Register</button>
                            </div> 
                        </div>  
                        <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
                        <ul>
                        <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li> 
                        </ul>
                    </div>
                
            </div>
            <div class="col-md-1 col-sm-12"> </div>
        </div> 

      
</body> 
 
	<!-- Footer start -->
	<footer id="footer" class="footer footer2">
		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 footer-widget">
					<h3 class="widget-title">Map</h3>

					<div class="img-gallery">
						<div class="img-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.713864109727!2d100.57795131483098!3d13.796114990318847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDQ3JzQ2LjAiTiAxMDDCsDM0JzQ4LjUiRQ!5e0!3m2!1sen!2sth!4v1516804942564" width="550" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>

						
				</div><!--/ end flickr --> 
				<div class="col-md-5 col-sm-12 footer-widget footer-about-us">
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
		</div><!--/ Container end -->
	</section><!--/ Footer end -->

     
    <div class="modal" id="signupDupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <p id="message"></p>
                </div>
            </div>
        </div>
    </div>

	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/owl.carousel.js"></script> 
	<!-- Bxslider -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/cd-hero.js"></script> 
	<!-- Template custom -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

</html>
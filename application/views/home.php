<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fitnessonline</title>  
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="google-signin-client_id" content="1019177846192-peic1lk07eus7mg28vl4vfksoio9alc6.apps.googleusercontent.com">
 
    <link href="<?php echo base_url(); ?>assets/css/fitness_styles_topmenu.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>assets/css/4.0.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<script src='https://kit.fontawesome.com/a076d05399.js'></script> 

    <!-- Template styles-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"> 
	<!-- Animation -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cd-hero.css"> 

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<script src="https://apis.google.com/js/platform.js" async defer></script>
    
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

        .main-button button{
			position:fixed;
			height:60px;
			width:60px;
			bottom:20px;
			right:10px;
			font-size:20px;
		}   
		.main-button:hover .fa-plus{
			transform: rotate(45deg);
			transition:0.5s;
		}
		.social-btn{
			opacity: 0;
			display: none;
			position:fixed;
			bottom:70px;
			right:10px;
			transition: opacity 0.7s;
		} 
		.main-button:hover > .social-btn{
			opacity: 1;
			display: block;
		}  
		.social-btn li i{
			float:right;
			font-size:17px;
			margin-top:10px;
		}   
		.main-button ul li{
			width:150px;
			text-align:left;
			margin-bottom:10px;
			font-weight: bold;
			height: 50px;
		}   
		.main-button ul li:hover i{
			font-size:25px;
		}
		.social-btn .Facebook,.social-btn .Twitter,.social-btn .Whatsapp,.social-btn .Google-plus,.social-btn .YouTube{
			background-color: #4267B2;
			color:#fff;
		}   
		.social-btn .Twitter{
			background-color: #1DA1F2;
		}   
		.social-btn .Whatsapp{
			background-color: #009688;
		}   
		.social-btn .line{
			background-color: #33c03f;
		}   
		.social-btn .Google-plus{
			background-color: #D0463B;
		}   
		.social-btn .YouTube{
			background-color: #ED2423;
		}
		.main-button ul li i{
			position: absolute;
			right:20px;
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

		* {box-sizing: border-box}

		/* style the container */
		/* .container {
		position: relative;
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px 0 30px 0;
		} */

		/* style inputs and link buttons */
		input,
		.btngo {
		width: 100%;
		padding: 12px;
		border: none;
		border-radius: 4px;
		margin: 5px 0;
		opacity: 0.85;
		display: inline-block;
		font-size: 17px;
		line-height: 20px;
		text-decoration: none; /* remove underline from anchors */
		}

		input:hover,
		.btngo:hover {
		opacity: 1;
		}

		/* add appropriate colors to fb, twitter and google buttons */
		.fb {
		background-color: #3B5998;
		color: white;
		}

 
		.navbar {
			z-index: 1;
			overflow: hidden; 
			position: fixed; /* Set the navbar to fixed position */
			top: 0; /* Position the navbar at the top of the page */
			width: 100%; /* Full width */
		}

		/* Links inside the navbar */
		.navbar a {
			float: left;
			display: block;
		 
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		/* Change background on mouse-over */
		.navbar a:hover {
			
		color: black;
		}

		/* Main content */
		.main {
			margin-top: 30px; /* Add a top margin to avoid content overlay */
		}
 
 
    </style>
    <script>
        // optional
        $('#blogCarousel').carousel({
                interval: 5000
        });

		$(document).ready(function(){
			$('#s-icons').click(function() {
				$('.navbar-nav').toggleClass("show");
			});
		});

		function onclickLogin() {
			$("#myModal").modal('show');
		}

		function onSignIn(googleUser) {
			alert("XX");
//	{"MU":"115426565188929492898","Ad":"Thakrit Ratchakote","pW":"Thakrit","qU":"Ratchakote","QK":"https://lh3.googleusercontent.com/a-/AOh14GgR8qJXSItrcB9CltutMSx5aoe8dJGSkD6gyb0q=s96-c","yu":"jumpersoft88@gmail.com"}
 
			var obj = JSON.stringify(googleUser.getBasicProfile());
			console.log("User is "+JSON.stringify(googleUser.getBasicProfile()));
			
			// console.log(googleUser.getBasicProfile().getName());
			// console.log(googleUser.getBasicProfile().getEmail());

			var id = googleUser.getBasicProfile().getId();
			var name = googleUser.getBasicProfile().getName();
			var fullname = googleUser.getBasicProfile().getGivenName()+" "+googleUser.getBasicProfile().getFamilyName();
			var imageUrl = googleUser.getBasicProfile().getImageUrl();
			var email = googleUser.getBasicProfile().getEmail();

			

			if(id != null){
				$.ajax({
					url: '<?php echo base_url(); ?>login/signupGoogle',
					type: 'POST',
					data: {
						id : id,
						name : name,
						fullname : fullname,
						imageUrl : imageUrl,
						email : email}, 
					error: function() {
						alert('Something is wrong');
					}, 
					dataType: "json",
					success: function(response) { 
						alert('message : '+response['username']); 
		
						if(response['message'] == "success"){ 
							//location.reload(); 
							$("#myModal").modal('hide'); 
						
							$("#welcomeModal").modal('show'); 
						} 
					}
				}); 
			}else{
				alert(id);
				$("#myModal").modal('hide');  
				$("#welcomeModal").modal('show');  

		  
			}
 
			 
		}


		function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
		//alert('statusChangeCallback');
			console.log('statusChangeCallback');
			console.log(response);                   // The current login status of the person.
			if (response.status === 'connected') {   // Logged into your webpage and Facebook.
				callAPI();  
			} else {                                 // Not logged into your webpage or we are unable to tell.
				//document.getElementById('status').innerHTML = '';
			}
		}


		function checkLoginState() {               // Called when a person is finished with the Login Button.
			FB.getLoginStatus(function(response) {   // See the onlogin handler
			statusChangeCallback(response);
			});
		}

		window.fbAsyncInit = function() {
			FB.init({
			appId      : '210089310288841',
			cookie     : true,
			xfbml      : true,
			version    : 'v6.0'
			});
			
			//FB.AppEvents.logPageView();   
			
			FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
				statusChangeCallback(response);        // Returns the login status.
			});
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		function callAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
			console.log('Welcome!  Fetching your information.... ');
			FB.api('/me', function(response) {
			console.log('Successful login for: ' + response.name);

			alert(response.last_name);

			document.getElementById('status').innerHTML =
				'Thanks for logging in, ' + response.name + '!'; 

			
			});
		}


    </script>
 
 
	<?php if(!isset($_SESSION['username'])){  ?>
		<script>
			$(document).ready(function(){
				$("#myModal").modal('show'); 
			});
			
		</script>

		<!--?php
			include ("template/topmenu.php");
		?-->
		<div class="modal" id="myModal"   tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="160" height="60" />
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-center"> 
						<?php echo $_SESSION['message']; ?>
						<div class="row">
							<div class="col-lg-3 ">
								<p>Contact QR Code <img src="<?php echo base_url(); ?>/assets/images/social/LINE_logo.png" alt="" width="50" height="50" /></p>
								<img class="ml-3" src="<?php echo base_url(); ?>/assets/images/social/qrcode.png" alt="" width="200" height="200" />
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-8 mt-5">
							
								<form action="<?php echo base_url(); ?>welcome" method="post">
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
														<input type="text" class="form-control" id="signin_username" name="signin_username" >
													</div>
													<div class="form-group">
														<label for="pwd">Password:</label>
														<input type="password" class="form-control" id="signin_password" name="signin_password">
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
												<button class="btn btn-primary" name="type" value="signup" ><i class="fa fa-user"></i> Register</button>
											</div> 
										</div>  
									</form>
									<!-- <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
									<ul>
										<li><a href="<!?php echo $authURL ?>"><i class="fa fa-facebook"></i> Facebook</a></li>
										<li>
											<a class="google btngo">
												<div class="g-signin2" data-width="230" data-height="30" data-longtitle="true"></div>
											</a> 
										</li>
									
									</ul> --> 
									 
										<div class="col mt-3"><div class="fb-login-button" data-width="" data-size="large" scope="public_profile,email" onlogin="checkLoginState();" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div></div>
										<div class="col mt-2" > 
												<!-- <div class="g-signin2" data-width="220" data-onsuccess="onSignIn" data-height="43" data-longtitle="true"></div> -->
												<!-- <button class="btn btn-primary" name="type" value="google" ><i class="fa fa-user"></i> Google</button> -->
												<!-- <a ></a><img class="ml-3" src="<!?php echo base_url(); ?>/assets/images/social/googlelogin.png" alt="" width="220" height="50" /> -->
											<?php echo '<div align="center">'.$login_button . '</div>';?>
											 </div> 
							
<!-- 
									<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button> -->
									<!-- <div class="modal-footer text-right"> 
											 <div id="status">  </div>  
											<div class="fb-login-button" data-width="" data-size="large" scope="public_profile,email" onlogin="checkLoginState();" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
												
											<a class="google btngo">
												<div class="g-signin2" data-width="230" data-height="45" data-longtitle="true"></div>
											</a>   
										 
									
									</div>  -->
								</div> 
							</div>
						
						</div>
					</div> 
					
				</div>
				
			</div> 
		
		</div>
	<?php }else{  
		?>
			<script>
			//	$("#myModal").modal('hide');   
 			//	$("#welcomeModal").modal('show'); 
 
			$(document).ready(function(){ 
				$("#welcomeModal").modal('show');
			}); 
				 
			</script>

			
		<?php

	} ?>

	<?php if(isset($messagejoin)){  ?>
        <script>
            $(document).ready(function(){
                $("#joinModal").modal('show');
            });
        </script>

        <!--?php
            include ("template/topmenu.php");
        ?-->
        <div class="modal" id="joinModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <p><?php echo $messagejoin ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
	

    <div class="fixed-top">
       <div class="container  mt-2">
			<div class="row">
				<!-- social icon-->
				<div class="col-sm-12">
					<ul class="social-network" >  
					<li><a class="waves-effect waves-dark" href="https://www.facebook.com/Fitnessonline.vs/"><i class="fa fa-facebook"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
					<!-- <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li> -->
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div> 
			</div>
        </div> 
		
	</div> 
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear " >
	
            <div class="container">
                <a class="navbar-brand " rel="nofollow" target="_blank" style="text-transform: uppercase;"> <img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="260" height="60" /></a>
            
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
  
					
                <div class="collapse navbar-collapse" id="navbarResponsive">
 
                    <ul class="navbar-nav ml-auto">
 
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>" >HOME
                        <!-- <span class="sr-only">(current)</span> -->
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUNT</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">SERVICE</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
 
					<?php if(isset($_SESSION['username'])) {?>
					 
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!?php echo $_SESSION['username'].'...'?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" style="color:red;" href="<!?php echo base_url(); ?>logout" >Logout</a> 
							</div>
						</li> -->

						<?php 
							
							if(isset($_SESSION['memberOfType'])) {
								if($_SESSION['memberOfType'] != 'member'){ ?>
									<li class="nav-item">
									<a class="nav-link btn" style="color:green;" onclick="onclkProfile(<?php echo $_SESSION['memberOfId']; ?>)"> <?php echo $_SESSION['username']; ?></a>
									</li>
									<?php }else{
							?>
									<li class="nav-item">
										<a class="nav-link btn" style="color:orange;"> <?php echo $_SESSION['username']; ?></a>
									</li>
								<?php
							}
								}
							?>
						<li class="nav-item">
							<a class="nav-link" style="color:red;" href="<?php echo base_url(); ?>logout" >Logout</a>
						</li>
					<?php }else{ ?>
						<li class="nav-item">
                        	<a class="nav-link " onclick="onclickLogin()">LOGIN</a>
                    	</li> 

					<?php }?> 
                    </ul>
                </div>
                </div>
        </nav>  
	</div>
	
<body >   
<br><br>
		<!-- Slider start -->
		<section id="home" class="no-padding mt-5">	<!--cd-hero copy.css -->

			<div id="main-slide" class="ts-flex-slider"> <!--cd-hero copy.css -->

				<div class="flexSlideshow flexslider">
					<ul class="slides">
						<li>
							<div class="overlay2"><!--cd-hero copy.css -->
								<img class="" src="<?php echo base_url(); ?>/assets/images/slider/aw_conceptB02.png" alt="slider">
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
								<img class="" src="<?php echo base_url(); ?>/assets/images/slider/aw_conceptB02-02.png" alt="slider">
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
								<img class="" src="<?php echo base_url(); ?>/assets/images/slider/aw_conceptB02-03.png" alt="slider">
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
						<li>
							<div class="overlay2"> <!--cd-hero copy.css -->
								<img class="" src="<?php echo base_url(); ?>/assets/images/slider/aw_conceptB02-04.png" alt="slider">
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
 
    <div class="container mt-5">
        <div class="row blog">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="carousel-item active text-center">
                            <div class="row">
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/01-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/02-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/03-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/04-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="carousel-item text-center">
                            <div class="row">
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/05-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/06-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/07-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/images/slider/sponsor/08-250x250.png" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item--> 
                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel--> 
            </div>
        </div>
    </div>
    
    <section id="teamCoach" class="teamCoach">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Coach<span class="title-desc">A Quality Experience Team.</span>
						 
						<?php if(isset($_SESSION['username'])) {?>
							<span class="title-desc"><a class="btn btn-outline-success mt-2" href="<?php echo base_url(); ?>trainner_join" role="button">Join Coach</a></span>
							
				 		<?php } ?>
					</h2> 
				</div>
			</div><!-- Title row end -->
  
			<?php    $i = 0;
		 		foreach ($allTrainnerByHome as  $rows) { ?>	
				 	<div class="col-md-12"> 
						<div id="blogCarousel" class="carousel slide" data-ride="carousel"> 
							<span class="pull-right"><a class="btn btn-outline-info mt-2" href="<?php echo base_url(); ?>alltrainner" role="button">All...</a></span>
							<!-- Carousel items -->
							<div class="carousel-inner"> 
								 <?php foreach ($rows as  $items) { 
										 
										 if($i==0){
											echo '<div class="carousel-item active text-center">';
										 }else{
											echo '<div class="carousel-item text-center">';
										 }
										 $i++;
									 ?>	 
									 
									<!-- <div class="carousel-item active text-center"> -->
										<div class="row">
											
										<?php foreach ($items as  $memb) { ?>
											<div class="col-md-3 mt-2"> 
												<div>
													<img  onclick="funcProfile(<?php echo $memb->member_id;?>)" src="http://fitnessonline.co.th/admin/upload/profile/<?php echo $memb->img_profile; ?>"  alt="">
													<span class="img-top"></span>
													<span class="img-bottom"></span>
												</div>
												<div class="team-content mt-2">
													<h3> <?php echo $memb->fullname;?></h3>
													<p><i class="fa fa-eye" aria-hidden="true"></i>  <?php echo $memb->view;?> </p>
													<p>
														<?php
															for ($i = 0; $i < $memb->star; $i++){
																echo '<i class="fa fa-star text-warning" aria-hidden="true"></i> ';
															}
														?> 
													</p>
													<div class="team-social"> 
														
														<?php  if($memb->facebook != null){	
															echo '<a class="fb" href="'.$memb->facebook.'"><i class="fa fa-facebook"></i></a>  ';
														}
														if($memb->line != null){
															echo '<a class="linkdin" href="'.$memb->line.'"><i class="fab fa-line"></i></a>  ';
														}

														if($memb->telephone != null){
															echo '<a class="gplus" href="tel:'.$memb->telephone.'"><i class="fa fa-phone"></i></a>  ';
														}
														?> 
													</div>
												</div> 
											</div> 
										<?php }?>
										</div>
										<!--.row-->
									</div>
									<!--.item-->

 
								 <?php }?> 
							</div>
						</div>
					</div> 
			<?php }?>

			 
		</div><!--/ Container end -->
    </section><!--/ Team end --> 
  
  <!-- Start Fitness -->
    <section id="teamFitness" class="teamFitness">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Fitness<span class="title-desc">A Quality Experience Fitness.</span>
						<?php if(isset($_SESSION['username'])) {?>
							<span class="title-desc"><a class="btn btn-outline-success mt-2" href="<?php echo base_url(); ?>fitness_join" role="button">Join Fitness</a></span>
							
				 		<?php } ?>

						 
					</h2>
				</div>
			</div><!-- Title row end -->

			<!-- Start slide fitness row1-->
			<?php    $i = 0; $index = 0;
				 // foreach ($allFitnessByHome as  $rows) 
				 if(count($allFitnessByHome) == 1){ ?>	
				 	<div class="col-md-12"> 
						<div id="blogCarousel" class="carousel slide" data-ride="carousel"> 
							<span class="pull-right"><a class="btn btn-outline-info mt-2" href="<?php echo base_url(); ?>allFitness" role="button">All...</a></span>
							<!-- Carousel items -->
							<div class="carousel-inner"> 
								 <?php foreach ($allFitnessByHome as  $items) { 

									 if($index < 2){ 

										 if($i==0){
											echo '<div class="carousel-item active text-center">';
										 }else{
											echo '<div class="carousel-item text-center">';
										 }
										 $i++;
									 ?>	 
									 
									<!-- <div class="carousel-item active text-center"> -->
										<div class="row">
											
										<?php foreach ($items as  $memb) { ?>
											<div class="col-md-3 mt-2"> 
												<div>
													<img style="width:260px;height:260px;" onclick="funcProfile(<?php echo $memb->member_id;?>)" src="http://fitnessonline.co.th/admin/upload/profile/<?php echo $memb->img_profile; ?>"  alt="">
													<span class="img-top"></span>
													<span class="img-bottom"></span>
												</div>
												<div class="team-content">
													<h3> <?php echo $memb->fullname;?></h3>
													<p><i class="fa fa-eye" aria-hidden="true"></i>  <?php echo $memb->view;?> </p>
													<p>
														<?php
															for ($i = 0; $i < $memb->star; $i++){
																echo '<i class="fa fa-star text-warning" aria-hidden="true"></i> ';
															}
														?> 
													</p>
													<div class="team-social"> 
														
														<?php  if($memb->facebook != null){	
															echo '<a class="fb" href="'.$memb->facebook.'"><i class="fa fa-facebook"></i></a>  ';
														}
														if($memb->line != null){
															echo '<a class="linkdin" href="'.$memb->line.'"><i class="fab fa-line"></i></a>  ';
														}

														if($memb->telephone != null){
															echo '<a class="gplus" href="tel:'.$memb->telephone.'"><i class="fa fa-phone"></i></a>  ';
														}
														?> 
													</div>
												</div> 
											</div> 
										<?php }?>
										</div>
										<!--.row-->
									</div>
									<!--.item-->

 
								 <?php } $index++;  }?> 
							</div>
						</div>
					</div> 
			<?php }?>

			<?php    $i = 0; $index = 3;
				 // foreach ($allFitnessByHome as  $rows) 
				 if(count($allFitnessByHome) == 2){ ?>	
				 	<div class="col-md-12"> 
						<div id="blogCarousel" class="carousel slide" data-ride="carousel"> 
							<span class="pull-right"><a class="btn btn-outline-info mt-2" href="<?php echo base_url(); ?>allFitness" role="button">All...</a></span>
							<!-- Carousel items -->
							<div class="carousel-inner"> 
								 <?php foreach ($allFitnessByHome as  $items) { 

									 if($index < 5){ 
										 
										 if($i==0){
											echo '<div class="carousel-item active text-center">';
										 }else{
											echo '<div class="carousel-item text-center">';
										 }
										 $i++;
									 ?>	 
									 
									<!-- <div class="carousel-item active text-center"> -->
										<div class="row">
											
										<?php foreach ($items as  $memb) { ?>
											<div class="col-md-3 mt-2"> 
												<div>
													<img style="width:260px;height:260px;" onclick="funcProfile(<?php echo $memb->member_id;?>)" src="http://fitnessonline.co.th/admin/upload/profile/<?php echo $memb->img_profile; ?>"  alt="">
													<span class="img-top"></span>
													<span class="img-bottom"></span>
												</div>
												<div class="team-content">
													<h3>Vosgi Varduhi</h3>
													<p><i class="fa fa-eye" aria-hidden="true"></i>  <?php echo $memb->view;?> </p>
													<p>
														<?php
															for ($i = 0; $i < $memb->star; $i++){
																echo '<i class="fa fa-star text-warning" aria-hidden="true"></i> ';
															}
														?> 
													</p>
													<div class="team-social"> 
														
														<?php  if($memb->facebook != null){	
															echo '<a class="fb" href="'.$memb->facebook.'"><i class="fa fa-facebook"></i></a>  ';
														}
														if($memb->line != null){
															echo '<a class="linkdin" href="'.$memb->line.'"><i class="fab fa-line"></i></a>  ';
														}

														if($memb->telephone != null){
															echo '<a class="gplus" href="tel:'.$memb->telephone.'"><i class="fa fa-phone"></i></a>  ';
														}
														?> 
													</div>
												</div> 
											</div> 
										<?php }?>
										</div>
										<!--.row-->
									</div>
									<!--.item-->

 
								 <?php } $index++;  }?> 
							</div>
						</div>
					</div> 
			<?php }?>
			 
 			<!-- End slide fitness row1--> 
		</div><!--/ Container end -->
    </section><!--/ Team end -->

	<div class="main-button">
	<!-- <button class="btn btn-primary " > -->
		<button class="btn " ><i class="fa fa-spotify" style="font-size:48px;color:red"></i></button>
		<ul class="social-btn">
			<a href="tel:094-794-7896"><li class="btn btn-defualt Google-plus" >Contact<i class="fa fa-phone" aria-hidden="true"></i></li></a><br> 
			<a href="https://www.facebook.com/Fitnessonline.vs/"><li class="btn btn-defualt Facebook" >Facebook <i class="fa fa-facebook" aria-hidden="true"></i></li></a><br> 
			<li class="btn btn-defualt line" onclick="lineFunction()">Line <i class="fab fa-line" aria-hidden="true"></i></li><br>  
			
		</ul>
	</div>

	


	<div class="modal" id="modalFacebook" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body text-center">
					<p>Waiting Facebook data and image...</p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalMessenger" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
						<img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="160" height="60" />
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-center"> 
				 
						<div class="row">
							<div class="col-lg-12 ">
								<p>Contact QR Code <img src="<?php echo base_url(); ?>/assets/images/social/LINE_logo.png" alt="" width="50" height="50" /></p>
								<img src="<?php echo base_url(); ?>/assets/images/social/qrcode.png" alt="" width="250" height="250" />
							</div>
							   
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 
</body>

<div class="modal fade bd-example-modal-lg" id="profileModal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="160" height="60" />
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button> 
				</div>
                <div class="modal-body text-center"> 
					<div class="row">
						<!-- Portfolio Item 1-->
						<div class="col-md-6 col-lg-4 mb-5">
							<div class="portfolio-item mx-auto" data-toggle="modal" >
								<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
									<div class="portfolio-item-caption-content text-center text-white"></div>
								</div>
								<img id="imageProfile" style="width:260px;height:260px;" alt=""> 
							</div>
						</div>
						<!-- Portfolio Item 2-->
						<div class="col-md-6 col-lg-3 mb-5 ">
							<div class="portfolio-item mx-auto" data-toggle="modal" >
								<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
									<div class="portfolio-item-caption-content text-center text-white"></i></div>
								</div>
								<div class="card border-success mx-sm-1 p-3 ">
									<div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true">  Eyes</span></div>
									<div class="text-success text-center mt-2"><h4 id="dataEye"></h4></div>
								</div>
								<div class="card border-warning mx-sm-1 p-3 mt-2">
									<div class="card border-warning shadow text-warning p-3 my-card"><span class="fa fa-star" aria-hidden="true">  Stars</span></div>
									<div class="text-warning text-center mt-2"><h4 id="dataStar"></h4></div>
								</div>
							</div>
						</div>
						<!-- Portfolio Item 3-->
						<div class="col-md-6 col-lg-4 mb-5 ">
							<div class="portfolio-item mx-auto" data-toggle="modal" >
								<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
									<div class="portfolio-item-caption-content text-center text-white"></i></div>
								</div>
								<div class="card text-white border-info mb-3">
									<div class="card-header bg-info "><label id="dataFullname"></label></div>
									<div class="card-body text-info">
										<!-- <h5 class="card-title">Primary card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										<div class="row"> 
											<div class="col-2 text-left"><i class='fas fa-map-marker-alt mr-3' style='font-size:36px;color:orange'></i></div>
											<div class="col-10 text-left"><label id="dataAddress"></label></div>
											<!-- <div></div> -->
										</div>
										<div class="row mt-1">
											<div class="col-2 text-left"><i class='fas fa-phone-square mr-3' style='font-size:36px;color:red'></i></div>
											<div class="col-10 text-left"><label id="dataTel"></label></div>  
										</div>
										<div class="row mt-1">
											<div class="col-2 text-left"><i class="fa fa-facebook-square mr-3" style="font-size:36px;color:blue"></i></div>
											<div class="col-10 text-left"><label id="dataFb"></label></i></div> 
										</div>
										<div class="row mt-1">
											<div class="col-2 text-left"><i class='fab fa-line  mr-3'style='font-size:36px;color:green'></i></div>
											<div class="col-10 text-left"><label id="dataLine"></label></div> 
										</div>
									</div>
								</div>

							</div>
						</div>  
					</div> 
				</div>
				<div class="modal-footer text-center">
					<div class="row"> 
						<!-- Portfolio Item -->
						<!-- <div class="col-md-12 col-lg-12 mb-5" id="portfolioDiv">
							<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1" >
								<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" >
									<div class="portfolio-item-caption-content text-center text-white"></div>
								</div>
								<img class="img-fluid"  src="<?php echo base_url(); ?>/assets/images/slider/aw_conceptB02.png" alt="">
								
							</div>
						</div> -->
						<div class="col mb-5" id="editPortfolioDiv"> 
						</div>
						<div class="col-md-12 col-lg-12 mb-5" id="portfolioDiv"> 
						</div>

						
					</div>
					
				</div>
			</div>
		</div>
	</div>
 


<script>

	function fbFunction() {
		$("#modalFacebook").modal('show');
	}

	function lineFunction() {
		$("#modalMessenger").modal('show');
	}
	

</script> 
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
							<p>0-2276-5763, 094-794-7896</p>
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
                    <h6 id="message" style="color:red;">อีเมลล์หรือชื่อสมาชิกนี้ มีอยู่ในระบบไม่สามารถใช้ได้</h6>
                </div>
            </div>
        </div>
	</div> 
	
	<div class="modal" id="signupFalseModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h6 id="message" style="color:red;">ไม่มีชื่อในระบบ</h6>
                </div>
            </div>
        </div>
    </div> 

	<div class="modal" id="welcomeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
					<div class="modal-header">
						<img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="160" height="60" />
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
                <div class="modal-body text-center"> 
                    <h6 id="message" class="mt-5" style="color:blue;"><?php echo $_SESSION['message']; ?></h6>
                </div>
            </div>
        </div>
	</div> 
 
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script> 
	<!-- Bxslider -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/cd-hero.js"></script> 
	<!-- Template custom -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

	<script>
		
		function funcProfile(id) {
			//alert(id);
 
			$.ajax({
				url: '<?php echo base_url(); ?>alltrainner/getTraininerById',
				type: 'POST',
				data: {
					id : id }, 
				error: function() {
					alert('Something is wrong');
				}, 
			//	dataType: "json",
				success: function(response) {  
					//alert(response['portfolio'].length);

					$("#profileModal").modal('show');  
					document.getElementById("imageProfile").src = "http://fitnessonline.co.th/admin/upload/profile/"+response['img_profile']; 

					clearForm();
					cleareditPortfolioDiv();
					if(response['portfolio'].length > 0){ 
						
						for (var i = 0; i < response['portfolio'].length; i++) { 
							var para = document.createElement("DIV"); 

							para.innerHTML = '<img class="img-fluid mt-1"  src="http://fitnessonline.co.th/admin/upload/portfolio/'+response['portfolio'][i]['img_portfolio_name']+'" alt="">';
							document.getElementById("portfolioDiv").appendChild(para);
						}
					}
					 
					document.getElementById('dataEye').innerHTML = response['view'];
					document.getElementById('dataStar').innerHTML = response['star'];

					document.getElementById('dataFullname').innerHTML = response['fullname'];
					document.getElementById('dataAddress').innerHTML = response['address'];
					document.getElementById('dataTel').innerHTML = response['telephone'];
					document.getElementById('dataFb').innerHTML = response['facebook'];
					document.getElementById('dataLine').innerHTML = response['line'];
				 
				}
            }); 
		}

		function clearForm() {
			var pTag = (document.getElementById('portfolioDiv').innerHTML = '');
		}

		function cleareditPortfolioDiv() {
			var pTag = (document.getElementById('editPortfolioDiv').innerHTML = '');
		}

		
	</script>

	<script> 
        function funcSignup() { 
 
            var signup_email = document.getElementById("signup_email").value;
            var signup_username = document.getElementById("signup_username").value;
            var signup_password = document.getElementById("signup_password").value;
            
			//alert(signup_email);
			//alert(signup_username);
			//alert(signup_password);

            $.ajax({
				url: '<?php echo base_url(); ?>login/signup',
				type: 'POST',
				data: {
					signup_email : signup_email,
					signup_username : signup_username,
					signup_password : signup_password}, 
				error: function() {
					alert('Something is wrong');
				}, 
				dataType: "json",
				success: function(response) { 
				 //alert('message : '+response['username']);
					// $("#custdatatable").load(window.location + " #custdatatable");
					// alert('customer_name : '+response);
				
					if(response['message'] == "userDup"){

						$("#signupDupModal").modal('show'); 
						
					}else{
						location.reload(); 
						$("#myModal").modal('hide'); 
					
						$("#welcomeModal").modal('show'); 
					} 

				  //location.reload(); 
				}
            });  
        } 

		 
		function onclkProfile(id) {
			//alert(id);
			$.ajax({
				url: '<?php echo base_url(); ?>alltrainner/getTraininerById',
				type: 'POST',
				data: {
					id : id }, 
				error: function() {
					alert('Something is wrong');
				}, 
			//	dataType: "json",
				success: function(response) {  
					//alert(response['portfolio'].length);

					$("#profileModal").modal('show');  
					document.getElementById("imageProfile").src = "http://fitnessonline.co.th/admin/upload/profile/"+response['img_profile']; 

					clearForm();
					if(response['portfolio'].length > 0){ 
						cleareditPortfolioDiv();
						for (var i = 0; i < response['portfolio'].length; i++) { 
							var para = document.createElement("DIV"); 

							para.innerHTML = '<img class="img-fluid mt-1"  src="http://fitnessonline.co.th/admin/upload/portfolio/'+response['portfolio'][i]['img_portfolio_name']+'" alt="">';
							document.getElementById("portfolioDiv").appendChild(para);
						}
					}

					var profileEdit = $('#editPortfolioDiv');
					var editPro = '';
					

					editPro += '<div class="card text-white border-info mb-3">';
					editPro += '<div class="card-header bg-info "><label id="dataFullname"></label></div>';
					editPro += '<div class="card-body text-info"> ';
					editPro += '<div class="row"> ';
					editPro += '<div class="col-3 text-left"><label>ชื่อ</label></div>';
					editPro += '<div class="col-9 text-left"><input type="text" class="form-control" id="edit_first_name" name="edit_first_name" value="'+response['first_name']+'" ></div>';
					editPro += '</div>';
					editPro += '<div class="row"> ';
					editPro += '<div class="col-3 text-left"><label>นามสกุล</label></div>';
					editPro += '<div class="col-9 text-left"><input type="text" class="form-control" id="edit_last_name" name="edit_last_name" value="'+response['last_name']+'" ></div>';
					editPro += '</div>';
					editPro += '<div class="row"> ';
					editPro += '<div class="col-3 text-left"><i class="fas fa-map-marker-alt mr-3" style="font-size:36px;color:orange"></i></div>';
					editPro += '<div class="col-9 text-left"><input type="text" class="form-control" id="edit_address" name="edit_address" value="'+response['address']+'" ></div>';
					editPro += '</div> ';
					editPro += '<div class="row"> ';
					editPro += '<div class="col-3 text-left"><i class="fas fa-phone-square mr-3" style="font-size:36px;color:red"></i></div>';
					editPro += '<div class="col-9 text-left"><input type="text" class="form-control" id="edit_telephone" name="edit_telephone" value="'+response['telephone']+'" ></div>';
					editPro += '</div> '; 
					editPro += '<div class="row mt-1">';
					editPro += '<div class="col-3 text-left"><i class="fa fa-facebook-square mr-3" style="font-size:36px;color:blue"></i></div>';
					editPro += '<div class="col-9 text-left"><input type="text" class="form-control" id="edit_facebook" name="edit_facebook" value="'+response['facebook']+'" ></div> ';
					editPro += '</div>';
					editPro += '<div class="row mt-1">';
					editPro += '<div class="col-3 text-left"><i class="fab fa-line  mr-3" style="font-size:36px;color:green"></i></div>';
					editPro += '<div class="col-9 text-left"><input type="text" class="form-control" id="edit_line" name="edit_line" value="'+response['line']+'" ></div> ';
					editPro += '</div>';

					editPro += '<div class="row mt-1">';
					editPro += '<div class="col-9 text-left"></div>';
					editPro += '<div class="col-3 text-left"><input type="button" class="btn btn-success" value="บันทึก" onclick="functionUpdate()"></div> ';
					editPro += '</div>';

					editPro += '</div>';
					editPro += '</div>';

				//	para.innerHTML = editPro; 

					profileEdit.html(editPro);


				//	document.getElementById("editPortfolioDiv").appendChild(para);


					 
					document.getElementById('dataEye').innerHTML = response['view'];
					document.getElementById('dataStar').innerHTML = response['star'];

					document.getElementById('dataFullname').innerHTML = response['first_name'] + ' '+response['last_name'];
					document.getElementById('dataAddress').innerHTML = response['address'];
					document.getElementById('dataTel').innerHTML = response['telephone'];
					document.getElementById('dataFb').innerHTML = response['facebook'];
					document.getElementById('dataLine').innerHTML = response['line'];
				 
				} 
            }); 
		}

		function functionUpdate() {

			var member_id = '<?php echo $_SESSION['memberOfId']; ?>';
			var first_name = document.getElementById("edit_first_name").value;
			var last_name = document.getElementById("edit_last_name").value;
			var address = document.getElementById("edit_address").value;
			var telephone = document.getElementById("edit_telephone").value;
			var facebook = document.getElementById("edit_facebook").value;
			var line = document.getElementById("edit_line").value; 




			$.ajax({
				url: '<?php echo base_url(); ?>welcome/updateProfile',
				type: 'POST',
				data: {
					member_id 	: member_id, 
					first_name 	: first_name,
					last_name 	: last_name,
					address 	: address,
					telephone 	: telephone,
					facebook 	: facebook,
					line 		: line},
				error: function() {
					alert('Something is wrong');
				}, 
				success: function(response) { 
					location.reload();  
				}
			}); 

		}
    </script>


</html>

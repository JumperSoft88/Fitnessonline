<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fitnessonline</title>
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
	

    <div class="fixed-top"></div>
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
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear navbar-fixed-top" >
            <div class="container">
                <a class="navbar-brand navbar-fixed-top" rel="nofollow" target="_blank" style="text-transform: uppercase;"> <img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="260" height="60" /></a>
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

                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICE</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>

					<?php if(isset($_SESSION['username'])) {?>
					 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $_SESSION['username'].'...'?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" style="color:red;" href="<?php echo base_url(); ?>logout" >Logout</a>
							</div>
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
      

        <table class="table table-striped table-bordered memberdatatable" style="width: 100%" id="memberdatatable">
                  <thead>
                      <tr>
                          <th>Username</th>
                          <th>Fullname</th>
                          <th>User from</th>
                          <th>type</th>
                          <th>facebook</th>
                          <th>line</th> 
                          <th>view</th> 
                          <th>star</th> 
                          <th></th>
                      </tr>
                  </thead>
                  <body>

                      <?php foreach ($allMember as $item) { ?> 
                          <tr>
                              <td><?php echo $item->username;?></td>
                              <td><?php echo $item->fullname;?></td>
                              <td><?php echo $item->oauth_provider;?></td>
                              <td><?php echo $item->type;?></td>
                              <td><?php echo $item->facebook;?></td>
                              <td><?php echo $item->line;?></td>
                              <td><?php echo $item->view;?></td>
                              <td><?php echo $item->star;?></td>
                              <td> <a type="button" class="btn btn-info"  onclick="functionEdit(<?php echo $item->customer_id;?>)"><span class="fa fa-pencil-square-o" aria-hidden="true"></a>  </td>
                          </tr>

                      <?php } ?>  
                  </body> 
              </table>  
    
    
    
 
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
  
 
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
 
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script> 
	<!-- Bxslider -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/cd-hero.js"></script> 
	<!-- Template custom -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
 
    <script>
          $('.memberdatatable').DataTable({});
    </script>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fitnessonline</title>  
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <link href="<?php echo base_url(); ?>/assets/css/fitness_styles_topmenu.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>/assets/css/4.0.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<script src='https://kit.fontawesome.com/a076d05399.js'></script> 

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
    </script> 

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
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear" >
            <div class="container">
                <a class="navbar-brand" rel="nofollow" target="_blank" style="text-transform: uppercase;"> <img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="260" height="60" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
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

					<?php if(isset($_SESSION['username'])) {?>
					 
						<?php 
							
							if(isset($_SESSION['memberOfType'])) {
								if($_SESSION['memberOfType'] != 'member'){ ?>
									<li class="nav-item">
									<a class="nav-link " style="color:green;"  onclick="onclkProfile(<?php echo $_SESSION['memberOfId']; ?>)"> <?php echo $_SESSION['username']; ?></a>
									</li>
						<?php }
							}
						?>
 
						<li class="nav-item">
							<a class="nav-link" style="color:red;" href="<?php echo base_url(); ?>logout" >Logout</a>
						</li>
					<?php }else{ ?>
						<li class="nav-item">
                        	<a class="nav-link " href="<?php echo base_url(); ?>login">LOGIN</a>
                    	</li> 

					<?php }?> 
                    </ul>
                </div>
                </div>
        </nav>  
	</div>
	
<body >  
    <br><br>
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

    <div class="container mt-5"> 

        <div class="row mt-5">
            <div class="col-md-4 col-sm-6"></div>
            <div class="col-md-4 col-sm-6"></div>
            <div class="col-md-4 col-sm-6">
                <form class="form-inline mt-5 mr-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 col-sm-6">
                <div class="form-group row">
                    <label for="province" class="col-sm-3 col-form-label">จังหวัด</label>
                    <div class="col-sm-9">
                        <select name="province_id" id="province" class="form-control" >
                            <option>เลือกจังหวัด</option>
                            <?php foreach ($provinces as $item) { ?>
                                <option value="<?=$item->id?>"><?php echo $item->name_th;?></option>
                            <?php } ?>
                        </select>
                    </div> 
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="form-group row">
                    <label for="amphure" class="col-sm-3 col-form-label">เขต/อำเภอ</label>
                    <div class="col-sm-9">
                        <select name="amphure_id" id="amphure" class="form-control" >
                            <option value="">เลือกอำเภอ</option>
                            
                        </select>
                    </div> 
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="form-group row">
                    <label for="district" class="col-sm-3 col-form-label">แขวง/ตำบล</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="district_id" id="district" >
                            <option value="">เลือกตำบล</option> 
                        </select>
                    </div> 
                </div>
            </div>
        </div>
    </div>
     
	<div class="container" id="listDiv">
		<section id="coachjoin" class="teamCoach">
	
			<?php    $i = 0;
			foreach ($allFitness as  $rows) {?>
				<div class="container">
					<div class="row text-center mt-3">
						
						<?php  foreach ($rows as  $items) {?>
							<div class="col-md-3 col-sm-6">
								<div class="team wow slideInLeft">
									<div >
										<img style="width:260px;height:260px;" onclick="funcProfile(<?php echo $items->member_id;?>)" src="http://fitnessonline.co.th/admin/upload/profile/<?php echo $items->img_profile; ?>" alt="">
										<span class="img-top"></span>
										<span class="img-bottom"></span>
									</div>
									<div class="team-content mt-1">
										<h6><?php echo $items->first_name.' '.$items->last_name; ?></h6>
										<p><i class="fa fa-eye" aria-hidden="true"></i>  <?php echo $items->view;?> </p> 
												<?php
													for ($i = 0; $i < $items->star; $i++){
														echo '<i class="fa fa-star text-warning" aria-hidden="true"></i> ';
													}
												?>  
										<div class="team-social">
												<?php  if($items->facebook != null){	
													echo '<a class="fb" href="'.$items->facebook.'"><i class="fa fa-facebook"></i></a>  ';
												}
												if($items->line != null){
													echo '<a class="linkdin" href="'.$items->line.'"><i class="fab fa-line"></i></a>  ';
												}

												if($items->telephone != null){
													echo '<a class="gplus" href="tel:'.$items->telephone.'"><i class="fa fa-phone"></i></a>  ';
												}
												?>
										</div>
									</div>
								</div>	
							</div><!--/ Team 1 end --> 
						<?php }?>		
						
					</div><!--/ Content row end -->
						
				</div><!--/ Container end -->

			<?php }?>
			
		</section><!--/ Team end -->
	</div>
  

	<div class="main-button"> 
		<button class="btn " ><i class="fa fa-spotify" style="font-size:48px;color:red"></i></button>
		<ul class="social-btn">
			<a href="tel:094-794-7896"><li class="btn btn-defualt Google-plus" >Contact<i class="fa fa-phone" aria-hidden="true"></i></li></a><br> 
			<a href="https://www.facebook.com/Fitnessonline.vs/"><li class="btn btn-defualt Facebook" >Facebook <i class="fa fa-facebook" aria-hidden="true"></i></li></a><br> 
			<li class="btn btn-defualt line" onclick="lineFunction()">Line <i class="fab fa-line" aria-hidden="true"></i></li><br>  
			
		</ul>
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
						<div class="col-md-12 col-lg-12 mb-5" id="portfolioDiv"> 
						</div>

						
					</div>
					
				</div>
			</div>
		</div>
	</div>
 
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
					//alert(response['img_profile']);

					$("#profileModal").modal('show');  
					document.getElementById("imageProfile").src = "http://fitnessonline.co.th/admin/upload/profile/"+response['img_profile']; 

					clearForm();
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

		function clearFormList() {
			var pTag = (document.getElementById('listDiv').innerHTML = '');
		}

        $(function(){
            var provinceObject = $('#province');
            var amphureObject = $('#amphure');
            var districtObject = $('#district');

			var alltrainerObject = $('#alltrainer');
        
            // on change province
            provinceObject.on('change', function(){
                var provinceId = $(this).val();
         
                amphureObject.html('<option value="">เลือกอำเภอ</option>');
                districtObject.html('<option value="">เลือกตำบล</option>');
   
                $.ajax({
                    url: "<?php echo base_url(); ?>trainner_join/getAmphure",
                    method: "POST",
                    data:{provinceId : provinceId},
                    error: function() {
                        alert('Something is wrong');
                    },
                    success:function(data){
                        amphureObject.html(data);
                    }
                })

				$.ajax({
                    url: "<?php echo base_url(); ?>search/searchMemberByProvinceId",
                    method: "POST",
                    data:{provinceId : provinceId,
					type : 'fitness'},
                    error: function() {
                        alert('Something is wrong');
                    },
                    success:function(data){
                        //alert('xxx');
						clearFormList();
						listAll(data['allProvince']);  
                    }
                })
            });
        
            // on change amphure
            amphureObject.on('change', function(){
                var amphureId = $(this).val();
        
                districtObject.html('<option value="">เลือกตำบล</option>');
                
                $.ajax({
                    url: "<?php echo base_url(); ?>trainner_join/getDistrict",
                    method: "POST",
                    data:{amphureId : amphureId},
                    error: function() {
                        alert('Something is wrong');
                    },
                    success:function(data){
                        districtObject.html(data);
                    }
                })

				$.ajax({
                    url: "<?php echo base_url(); ?>search/searchMemberByAmphureId",
                    method: "POST",
                    data:{amphureId : amphureId,
					type : 'fitness'},
                    error: function() {
                        alert('Something is wrong');
                    },
                    success:function(data){ 
						clearFormList();
						listAll(data['allAmphure']);  
                    }
                })
            });

			districtObject.on('change', function(){
                var district = $(this).val(); 
				$.ajax({
                    url: "<?php echo base_url(); ?>search/searchMemberByDistrictId",
                    method: "POST",
                    data:{district : district,
					type : 'trainner'},
                    error: function() {
                        alert('Something is wrong');
                    },
                    success:function(data){ 
						clearFormList();
						listAll(data['allDistrict']);  
                    }
                })
            });

        });

		function listAll(list) {

			var alltrainerObject = $('#listDiv');

			var divAll =  '<section id="coachjoin" class="teamCoach"> ';
			//console.log(list)

			//alert(list.length);
				if(list.length > 0){ 
					for (var i = 0; i < list.length; i++) { 

						divAll +=  '<div class="container">'; 
							divAll +=  '<div class="row text-center mt-3">'; 

								//alert(Object.keys(list[i]).length);
								var index = 0;
								for(var j = 0; j < Object.keys(list[i]).length; j++){

										divAll +=  '<div class="col-md-3 col-sm-6">'; 
										divAll +=  '<div class="team wow slideInLeft">'; 
										divAll +=  '<div >'; 
										divAll +=  '<img style="width:260px;height:260px;" onclick="funcProfile('+list[i][index]['member_id']+')" src="http://fitnessonline.co.th/admin/upload/profile/'+list[i][index]['img_profile']+'" alt="">'; 
										divAll +=  '<span class="img-top"></span>'; 
										divAll +=  '<span class="img-bottom"></span>'; 
										divAll +=  '</div>'; 
										divAll +=  '<div class="team-content mt-1">'; 
										divAll +=  '<h6>'+list[i][index]['first_name']+'  '+list[i][index]['last_name']+'</h6>'; 
										divAll +=  '<p><i class="fa fa-eye" aria-hidden="true"></i> '+list[i][index]['view']+'</p> '; 
										
										// for (var z = 0; z < list[i][index]['star']; z++){
										// 	divAll +=  '<i class="fa fa-star text-warning" aria-hidden="true"></i>'; 
										// }
										divAll +=  '<div class="team-social">'; 
										divAll +=  '<a class="fb" href="'+list[i][index]['facebook']+'"><i class="fa fa-facebook"></i></a>'; 
										divAll +=  '<a class="linkdin" href="'+list[i][index]['line']+'"><i class="fab fa-line"></i></a>'; 
										divAll +=  '<a class="gplus" href="tel:'+list[i][index]['telephone']+'"><i class="fa fa-phone"></i></a>'; 
										divAll +=  '</div>'; 
										divAll +=  '</div>'; 
										divAll +=  '</div>'; 
										divAll +=  '</div>'; 
								
									index++;   
								}
							divAll +=  '</div>'; 
						divAll +=  '</div>'; 

					}

				}
					
				divAll +=  '</section>';
				
			alltrainerObject.html(divAll);

			}
    </script> 
 
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/owl.carousel.js"></script> 
	<!-- Bxslider -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/cd-hero.js"></script> 
	<!-- Template custom -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

</html>
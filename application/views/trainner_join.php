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

        .main-button button{
			position:fixed;
			height:80px;
			width:80px;
			bottom:80px;
			right:100px;
			font-size:30px;
		}   
		.main-button:hover .fa-plus{
			transform: rotate(45deg);
			transition:0.5s;
		}
		.social-btn{
			opacity: 0;
			display: none;
			position:fixed;
			bottom:150px;
			right:100px;
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
			width:250px;
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
<!--
	<script>
		$(document).ready(function(){
			$("#myModal").modal('show');
		});
	</script> -->

    <!--?php
        include ("template/topmenu.php");
    ?-->
	<div class="modal" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"> New </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<p>Welcome to</p>
					<img src="<?php echo base_url(); ?>assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt="" width="260" height="100" />
				</div>
				<!--<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div> -->
			</div>
		</div>
	</div>

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
                        <a class="nav-link" >HOME
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
                        	<a class="nav-link " href="<?php echo base_url(); ?>login">LOGIN</a>
                    	</li> 

					<?php }?> 
                    </ul>
                </div>
                </div>
        </nav>  
	</div>
	
<body >  
    <div class="body-inner"> 
		<!-- Slider start -->
		<section id="home" class="no-padding">	<!--cd-hero copy.css -->

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
 	</div>

    
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
    
    <section id="coachjoin" class="teamCoach">
		<div class="container">
            <div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title" style="color:blue;">Registration<span class="title-desc">Welcome to a Quality Experience Team.</span></h2> 
				</div> 
			</div><!--  row end -->
 
         
            <form action="<?php echo base_url(); ?>trainner_join/trainner_regis" method="post"> 
                <div class="row">
                    <div class="col-md-10 mx-auto "> 
                        <div class="card">
                            <div class="card-header text-center">
                                Registration to Coach!
                            </div> 
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fullname" class="col-sm-3 col-form-label">ชื่อ - นามสกุล</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="fullname" id="fullname">
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="telephone" class="col-sm-3 col-form-label">เบอร์ติดต่อ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="telephone" id="telephone" maxlength="10">
                                    </div> 
                                </div>
								<div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">ที่อยู่</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address" id="address" >
                                    </div> 
                                </div>
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
                                <div class="form-group row">
                                    <label for="amphure" class="col-sm-3 col-form-label">เขต/อำเภอ</label>
                                    <div class="col-sm-9">
                                        <select name="amphure_id" id="amphure" class="form-control" >
                                            <option value="">เลือกอำเภอ</option>
                                            
                                        </select>
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="district" class="col-sm-3 col-form-label">แขวง/ตำบล</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="district_id" id="district" >
                                            <option value="">เลือกตำบล</option> 
                                        </select>
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="facebook" id="facebook">
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="line" class="col-sm-3 col-form-label">LineId</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="line" id="line">
                                    </div> 
                                </div>
								<div class="form-group row">
                                    <label for="ig" class="col-sm-3 col-form-label">IG</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="ig" id="ig">
                                    </div> 
                                </div>
                                
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-primary" name="type" value="signup"><i class="fa fa-user"></i> Submit</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
		</div><!--/ Container end -->
    </section><!--/ Team end -->
  
  

	<div class="main-button">
		<button class="btn btn-primary" style="background-color: #008CBA;"><i class="fa fa-plus" aria-hidden="true"></i></button>
		<ul class="social-btn">
			<li class="btn btn-defualt Facebook">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></li><br> 
			<li class="btn btn-defualt Whatsapp">Line <i class="fa fa-whatsapp" aria-hidden="true"></i></li><br> 
			<li class="btn btn-defualt YouTube">YouTube <i class="fa fa-youtube" aria-hidden="true"></i></li>
		</ul>
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
        $(function(){
            var provinceObject = $('#province');
            var amphureObject = $('#amphure');
            var districtObject = $('#district');
        
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
            });
        });
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
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
	                    <li class="dropdown active">
                       		<a href="<?php echo base_url();?>auth/select_registration" >Registration </a>
                       		 
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?php echo base_url();?>info/contact" >Contact </a>
                       		 
	                    </li>
            			<li class="">
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
					<h2 class="title">Registration <span class="title-desc">User profile member form requirement</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-12 col-sm-12">
					<div class="team wow slideInLeft">
                        <form class="form-horizontal" method="POST" action="register" >
                            <fieldset>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label"   ></label>
                                    <div class="col-md-4">
                                            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                                            <?php if(isset($_SESSION['success'])) { ?>
                                                <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
                                            <?php } ?>

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

                                <!-- Text input (email)-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Email Address" >Email Address</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md">
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

                                <!-- Text input (confrmpassword)-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="confrmpassword" >ยืนยันรหัสผ่าน</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user">
                                                </i>
                                            </div>
                                            <input id="confrmpassword" name="confrmpassword" type="password" placeholder="password" class="form-control input-md">
                                        </div>
                                        <div id="member_confrmpassword_error"></div>
                                    </div>

                                </div>
                                <input type="hidden" name="status_logon" value="off">
                                <input type="hidden" name="status_system" value="on">
                                <input type="hidden" name="member_type" value="member">

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Overview (max 200 words)"></label>
                                    <div class="col-md-8">
                                    <textarea style="color:black" class="form-control" rows="10"  id="Overview (max 200 words)" name="Overview (max 200 words)" >มาตรา ๕ ผู้ใดเข้าถึงโดยมิชอบซึ่งระบบคอมพิวเตอร์ที่มีมาตรการป้องกันการเข้าถึงโดยเฉพาะและมาตรการนั้น
            มิได้มีไว้สำหรับตน ต้องระวางโทษจำคุกไม่เกินหกเดือน หรือปรับไม่เกินหนึ่งหมื่นบาท หรือทั้งจำทั้งปรับ

            มาตรา ๖ ผู้ใดล่วงรู้มาตรการป้องกันการเข้าถึงระบบคอมพิวเตอร์ที่ผู้อื่นจัดทำขึ้นเป็นการเฉพาะถ้านำมาตรการดังกล่าว
            ไปเปิดเผยโดยมิชอบ ในประการที่น่าจะเกิดความเสียหายแก่ผู้อื่น ต้องระวางโทษจำคุกไม่เกินหนึ่งปี หรือปรับไม่เกินสองหมื่นบาท
            หรือทั้งจำทั้งปรับ

            มาตรา ๗ ผู้ใดเข้าถึงโดยมิชอบซึ่งข้อมูลคอมพิวเตอร์ที่มีมาตรการป้องกันการเข้าถึงโดยเฉพาะและมาตรการนั้น
            มิได้มีไว้สำหรับตน ต้องระวางโทษจำคุกไม่เกินสองปีหรือปรับไม่เกินสี่หมื่นบาทหรือทั้งจำทั้งปรับ

            มาตรา ๘ ผู้ใดกระทำด้วยประการใดโดยมิชอบด้วยวิธีการทางอิเล็กทรอนิกส์เพื่อดักรับไว้ซึ่งข้อมูลคอมพิวเตอร์ของผู้อื่น
            ที่อยู่ระหว่างการส่งในระบบคอมพิวเตอร์ และข้อมูลคอมพิวเตอร์นั้นมิได้มีไว้เพื่อประโยชน์สาธารณะหรือเพื่อให้บุคคลทั่วไป
            ใช้ประโยชน์ได้ต้องระวางโทษจำคุกไม่เกินสามปี หรือปรับไม่เกินหกหมื่นบาท หรือทั้งจำทั้งปรับ

            มาตรา ๙ ผู้ใดทำให้เสียหาย ทำลาย แก้ไข เปลี่ยนแปลง หรือเพิ่มเติมไม่ว่าทั้งหมดหรือบางส่วน ซึ่งข้อมูลคอมพิวเตอร์ของผู้อื่น
            โดยมิชอบ ต้องระวางโทษจำคุกไม่เกินห้าปี หรือปรับไม่เกินหนึ่งแสนบาท หรือทั้งจำทั้งปรับ

            มาตรา ๑๐ ผู้ใดกระทำด้วยประการใดโดยมิชอบ เพื่อให้การทำงานของระบบคอมพิวเตอร์ของผู้อื่นถูกระงับ ชะลอ ขัดขวาง หรือรบกวนจนไม่สามารถทำงานตามปกติได้ต้องระวางโทษจำคุกไม่เกินห้าปี หรือปรับไม่เกินหนึ่งแสนบาท หรือทั้งจำทั้งปรับ

            มาตรา ๑๑ ผู้ใดส่งข้อมูลคอมพิวเตอร์หรือจดหมายอิเล็กทรอนิกส์แก่บุคคลอื่นโดยปกปิดหรือปลอมแปลงแหล่งที่มา
            ของการส่งข้อมูลดังกล่าว อันเป็นการรบกวนการใช้ระบบคอมพิวเตอร์ของบุคคลอื่นโดยปกติสุข ต้องระวางโทษปรับไม่เกินหนึ่งแสนบาท

            มาตรา ๑๒ ถ้าการกระทำความผิดตามมาตรา ๙ หรือมาตรา ๑๐

            (๑) ก่อให้เกิดความเสียหายแก่ประชาชน ไม่ว่าความเสียหายนั้นจะเกิดขึ้นในทันทีหรือในภายหลัง และไม่ว่าจะเกิดขึ้นพร้อมกันหรือไม่ ต้องระวางโทษจำคุกไม่เกินสิบปี และปรับไม่เกินสองแสนบาท

            (๒) เป็นการกระทำโดยประการที่น่าจะเกิดความเสียหายต่อข้อมูลคอมพิวเตอร์ หรือระบบคอมพิวเตอร์ที่เกี่ยวกับการรักษาความมั่นคงปลอดภัยของประเทศ ความปลอดภัยสาธารณะ ความมั่นคงในทางเศรษฐกิจของประเทศ หรือการบริการสาธารณะหรือเป็นการกระทำต่อข้อมูลคอมพิวเตอร์
            หรือระบบคอมพิวเตอร์ที่มีไว้เพื่อประโยชน์สาธารณะ ต้องระวางโทษจำคุกตั้งแต่สามปีถึงสิบห้าปี และปรับตั้งแต่หกหมื่นบาท
            ถึงสามแสนบาท ถ้าการกระทำความผิดตาม (๒) เป็นเหตุให้ผู้อื่นถึงแก่ความตาย ต้องระวางโทษจำคุกตั้งแต่สิบปีถึงยี่สิบปี


            มาตรา ๑๓ ผู้ใดจำหน่ายหรือเผยแพร่ชุดคำสั่งที่จัดทำขึ้นโดยเฉพาะเพื่อนำไปใช้เป็นเครื่องมือในการกระทำความผิด
            ตามมาตรา ๕ มาตรา ๖ มาตรา ๗ มาตรา ๘ มาตรา ๙ มาตรา ๑๐ หรือมาตรา ๑๑ ต้องระวางโทษจำคุกไม่เกินหนึ่งปี หรือปรับไม่เกินสองหมื่นบาท หรือทั้งจำทั้งปรับ

            มาตรา ๑๔ ผู้ใดกระทำความผิดที่ระบุไว้ดังต่อไปนี้ ต้องระวางโทษจำคุกไม่เกินห้าปี หรือปรับไม่เกินหนึ่งแสนบาท
            หรือทั้งจำทั้งปรับ


            (๑) นำเข้าสู่ระบบคอมพิวเตอร์ซึ่งข้อมูลคอมพิวเตอร์ปลอมไม่ว่าทั้งหมดหรือบางส่วน หรือข้อมูลคอมพิวเตอร์
            อันเป็นเท็จโดยประการที่น่าจะเกิดความเสียหายแก่ผู้อื่นหรือประชาชน

            (๒) นำเข้าสู่ระบบคอมพิวเตอร์ซึ่งข้อมูลคอมพิวเตอร์อันเป็นเท็จ โดยประการที่น่าจะเกิดความเสียหายต่อความมั่นคงของประเทศหรือก่อให้เกิดความตื่นตระหนกแก่ประชาชน

            (๓) นำเข้าสู่ระบบคอมพิวเตอร์ซึ่งข้อมูลคอมพิวเตอร์ใด ๆ อันเป็นความผิดเกี่ยวกับความมั่นคงแห่งราชอาณาจักรหรือความผิดเกี่ยวกับการก่อการร้ายตามประมวลกฎหมายอาญา

            (๔) นำเข้าสู่ระบบคอมพิวเตอร์ซึ่งข้อมูลคอมพิวเตอร์ใด ๆ ที่มีลักษณะอันลามกและข้อมูลคอมพิวเตอร์นั้นประชาชนทั่วไปอาจเข้าถึงได้

            (๕) เผยแพร่หรือส่งต่อซึ่งข้อมูลคอมพิวเตอร์โดยรู้อยู่แล้วว่าเป็นข้อมูลคอมพิวเตอร์ตาม (๑)(๒) (๓) หรือ (๔)


            มาตรา ๑๕ ผู้ให้บริการผู้ใดจงใจสนับสนุนหรือยินยอมให้มีการกระทำความผิดตามมาตรา ๑๔ ในระบบคอมพิวเตอร์ที่อยู่ในความควบคุมของตน ต้องระวางโทษเช่นเดียวกับผู้กระทำความผิดตามมาตรา ๑๔

            มาตรา ๑๖ ผู้ใดนำเข้าสู่ระบบคอมพิวเตอร์ที่ประชาชนทั่วไปอาจเข้าถึงได้ซึ่งข้อมูลคอมพิวเตอร์ที่ปรากฏ
            เป็นภาพของผู้อื่น และภาพนั้นเป็นภาพที่เกิดจากการสร้างขึ้น ตัดต่อ เติม หรือดัดแปลงด้วยวิธีการทางอิเล็กทรอนิกส์
            หรือวิธีการอื่นใด ทั้งนี้ โดยประการที่น่าจะทำให้ผู้อื่นนั้นเสียชื่อเสียง ถูกดูหมิ่น ถูกเกลียดชัง หรือได้รับความอับอาย ต้องระวางโทษจำคุกไม่เกินสามปี หรือปรับไม่เกินหกหมื่นบาท หรือทั้งจำทั้งปรับ ถ้าการกระทำตามวรรคหนึ่ง เป็นการนำเข้าข้อมูล
            คอมพิวเตอร์โดยสุจริต ผู้กระทำไม่มีความผิด ความผิดตามวรรคหนึ่งเป็นความผิดอันยอมความได้ ถ้าผู้เสียหายในความผิด
            ตามวรรคหนึ่งตายเสียก่อนร้องทุกข์ ให้บิดา มารดา คู่สมรส หรือ บุตรของผู้เสียหายร้องทุกข์ได้ และให้ถือว่าเป็นผู้เสียหาย

            มาตรา ๑๗ ผู้ใดกระทำความผิดตามพระราชบัญญัตินี้นอกราชอาณาจักรและ
            (๑) ผู้กระทำความผิดนั้นเป็นคนไทย และรัฐบาลแห่งประเทศที่ความผิดได้เกิดขึ้นหรือผู้เสียหาย
            ได้ร้องขอให้ลงโทษ หรือ

            (๒) ผู้กระทำความผิดนั้นเป็นคนต่างด้าว และรัฐบาลไทยหรือคนไทยเป็นผู้เสียหายและผู้เสียหาย
            ได้ร้องขอให้ลงโทษจะต้องรับโทษภายในราชอาณาจักร</textarea>
                                    </div>
                                </div>

                                <!-- Multiple Radios -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="Owns Vehicle"></label>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label for="Owns Vehicle-0" >
                                                <input type="checkbox" name="check_accept" id="check_accept" value="1" >
                                                <div id="check_accept_error"></div>
                                                ยอมรับข้อตกลงและเงื่อนไข
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" ></label>
                                    <div class="col-md-4">
                                        <!--a class="btn btn-success" name="register_btn" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> สมัคร</a>
                                        <a class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a-->

                                        <button type="submit" class="btn btn-success btn-lg" name="register" >สมัคร</button>
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
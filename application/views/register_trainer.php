
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fitnessonline</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/fitness_styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body > <!--style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" -->
<nav class="navbar navbar-inverse" style="background-image: url(<?php echo base_url(); ?>assets/img/back_header.png)">
    <?php include("template/header_regis.php") ?>
</nav>


<div class="container" >
    <div class="row" >
        <div class="col-md-10 ">
            <form class="form-horizontal" method="POST" action="register_trainer" >
                <fieldset>
                    <!-- Form Name -->
                    <legend>User profile trainer form requirement</legend>

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

                    <!-- Multiple Radios (price) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="price" >สมัครสมาชิก</label>
                        <div class="col-md-8">
                            
                            <label class="radio-inline" for="price" >
                                <input type="radio" name="price" id="price" value="2,000">
                                PT_set A : ราย 6 เดือน 3,999 บาท
                            </label>
                            <label class="radio-inline" for="price" >
                                <input type="radio" name="price" id="price" value="2,000">
                                PT_set B : รายปี 5,999 บาท
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Overview (max 200 words)">โอนเงินเข้าบัญชี</label> <!--Overview (max 200 words) -->
                        <div class="col-md-4">
                            <label  >ชื่อบัญชี บจก. ฟิตเนส ออนไลน์ </label> <!--Overview (max 200 words) -->
                            <label  >เลขที่บัญชี  029-1-43163-1 </label> <!--Overview (max 200 words) -->
                        </div>
                    </div>

                    <input type="hidden" name="status_logon" value="off">
                    <input type="hidden" name="status_system" value="on">
                    <input type="hidden" name="member_type" value="trainer">

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
                        <label class="col-md-4 control-label" for="Owns Vehicle"></label>
                        <div class="col-md-4">
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
    </div>
</div>





<!-- Footer -->
<footer class="footer text-center"  style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)">
    <?php include("template/footer.php")?>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>



</body>
</html>


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
<nav class="navbar navbar-inverse" style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)">
    <?php include("template/header_ab.php") ?>
</nav>

<div class="row" >
    <div class="col-md-12">
        <div id="Carousel" class="carousel slide">

            <!-- Carousel items -->
            <div class="container">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://www.fitnessonline.co.th/fitness/img/advertising.png" alt="Image" style="max-width:100%;" width="150" height="150"></a></div>
                        <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://www.fitnessonline.co.th/fitness/img/advertising.png" alt="Image" style="max-width:100%;" width="150" height="150"></a></div>
                        <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://www.fitnessonline.co.th/fitness/img/advertising.png" alt="Image" style="max-width:100%;" width="150" height="150"></a></div>
                        <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://www.fitnessonline.co.th/fitness/img/advertising.png" alt="Image" style="max-width:100%;" width="150" height="150"></a></div>
                    </div><!--.row-->
                </div><!--.item-->


            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                        <form class="form-horizontal" method="POST" action="submit_topic">
                            <fieldset>
                                <legend class="text-center">ตั้งกระทู้</legend>
                                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="topic">หัวข้อกระทู้</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="topic" value="<?php echo set_value('topic'); ?>"  cols="50" rows="3" id="detail"></textarea>
                                    </div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">รายละเอียด</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="detail" value="<?php echo set_value('detail'); ?>"  cols="50" rows="5" id="detail"></textarea>
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">ชื่อผู้ตั้งกระทู้ 	</label>
                                    <div class="col-md-9">
                                        <input name="name" type="text" value="<?php echo $_SESSION['username']; ?>" disabled  size="50" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">E-mail</label>
                                    <div class="col-md-9">
                                        <input name="email" type="text" value="<?php echo $_SESSION['email']; ?>" size="50" disabled class="form-control">
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg" name="submit_topic" >ตั้งกระทู้</button>
                                        <button type="button" class="btn btn-danger btn-lg" name="submit2"  onclick="history.back();">ยกเลิก</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
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

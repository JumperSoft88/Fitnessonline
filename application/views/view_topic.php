<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="language" content="en" />
      <title>รายละเอียดกระทู้</title>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>assets/css/fitness_styles.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>assets/css/fitness_forum_styles.css" rel="stylesheet">


    </head>

<body >
<nav class="navbar navbar-inverse" style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)">
    <?php include("template/header_nav.php") ?>
</nav>

<?php if (isset($_SESSION['username'])) { ?>
    <div ><a style="text-align: left"> ยินดีต้อนรับ คุณ , <?php echo $_SESSION['username'];?></a></div>

    <div class="container"  >
        <div class="row">
            <div class="col-md-12">
                <div class="fb-cover">
                    <img src="http://www.fitnessonline.co.th/fitness/img/topic01.png" class="img-responsive fb-front">
                </div>
                <?php if (isset($_SESSION['answer']) ) { ?>
                    <div class="navbar-header">
                        <div class="navbar-brand fb-profile navbar-brand">
                            <a href="<?php echo base_url();?>info/profile">


                                <?php if(isset($photo_header)) { foreach($photo_header as $row) { ?>
                                    <img src="<?php echo base_url(); ?><?php echo $row->path;?>/<?php echo $row->file_name;?>" width="180" height="100" class="img-responsive img-thumbnail img-circle center-block">

                                    <?php
                                }
                                }else{
                                    ?>
                                        <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail img-circle center-block">
                                    <?php
                                }?>
                            </a>
                        </div>
                    </div>
                    <!--xxxx -->
                    <?php
                }?>
            </div>
        </div>

    </div>

    <div class="container content">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <div class="testimonials">

    <?php foreach($topic_posts as $row) { ?>

        <div class="active item">
            <blockquote><p><?php echo $row->topic;?></p></blockquote>

            <?php if (isset($_SESSION['answer']) ) { ?>
                <div class="carousel-info">




                    <?php if(isset($photo_header)) { foreach($photo_header as $rowPhoto) { ?>
                            <img alt="" src="<?php echo base_url(); ?><?php echo $rowPhoto->path;?>/<?php echo $rowPhoto->file_name;?>" class="pull-left">
                        <?php
                    }
                    }else{
                        ?>
                            <img alt="" src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="pull-left">
                        <?php
                    }?>

                    <div class="pull-left">
                        <span class="testimonials-name"><?php echo $row->name;?></span>
                        <span class="testimonials-post"><?php echo $row->email;?></span>
                        <span class="testimonials-post"><?php echo $row->created;?></span>
                    </div>
                </div>

                <?php
            }?>
        </div>

        </div>
        </div>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3> </h3>
                </div><!-- /col-sm-12 -->
            </div><!-- /row -->
        </div><!-- /container -->


        <?php
        include ("answer_question.php");
        ?>
        <?php
    }
    ?>


    <?php
}else{ ?>
    <div class="container text-center">
        <!--img align="left" class="fb-image-lg" src="http://www.fitnessonline.co.th/fitness/img/topic01.png" alt="Profile image example" style="width:100%" alt="Image"/-->
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <!--img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"-->
                <a href="<?php echo base_url(); ?>auth/login"><img src="<?php echo base_url(); ?>assets/img/select_Login.png" alt="Image" class="img-responsive" style="width:100%"/> </a>

            </div>
            <div class="col-sm-6 col-xs-12" >
                <a href="<?php echo base_url(); ?>auth/select_registration"><img src="<?php echo base_url(); ?>assets/img/select_registration.png" class="img-responsive" style="width:100%" alt="Image"></a>

            </div>
        </div>
    </div><br>
<?php
}
?>




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
<!DOCTYPE html>
<html>
<head>
    <title>Fitnessonline</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/fitness_styles.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/fit_fancybox.js"></script>



    <style type="text/css">
        body
        {
            font-family: 'Open Sans', sans-serif;
        }

        .fb-profile img.fb-image-lg{
            z-index: 0;
            width: 100%;
            margin-bottom: 10px;
        }

        .fb-image-profile
        {
            margin: -90px 10px 0px 50px;
            z-index: 9;
            width: 20%;
        }

        @media (max-width:768px)
        {

            .fb-profile-text>h1{
                font-weight: 700;
                font-size:16px;
            }

            .fb-image-profile
            {
                margin: -45px 10px 0px 25px;
                z-index: 9;
                width: 20%;
            }
        }

        .glyphicon { margin-right:5px;}
        .rating .glyphicon {font-size: 22px;}
        .rating-num { margin-top:0px;font-size: 54px; }
        .progress { margin-bottom: 5px;}
        .progress-bar { text-align: left; }
        .rating-desc .col-md-3 {padding-right: 0px;}
        .sr-only { margin-left: 5px;overflow: visible;clip: auto; }


        .gallery_product
        {
            margin-bottom: 30px;
        }



    </style>
</head>

<body >



<?php if (isset($_SESSION['member_type'])) {  if($_SESSION['member_type'] == 'trainer'){ ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    <!-- Modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <a href="webboard/index_forum"><img src="<?php echo base_url(); ?>assets/img/slide05.png" class="img-responsive" style="width:100%" alt="Image"></a>
                </div>

            </div>
        </div>
    </div>

    <?php
}
}?>




<nav class="navbar navbar-inverse" style="background-image: url(<?php echo base_url(); ?>assets/img/back_header.png)">
    <?php include("template/header_profile.php") ?>
</nav>

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="container text-center">
    <div class="row">
        <div class="col-sm-2 col-xl-2">
            <?php  if (isset($_SESSION['username'])){ ?>
                <div ><a style="text-align: left"> ยินดีต้อนรับ คุณ , <?php echo $_SESSION['username'];?></a></div>
                <?php
            } ?>
        </div>
    </div>
</div>

<div class="container">
    <h2>Modal Example</h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="http://www.vidaweb.org/wp-content/uploads/2016/08/the-pen-1060x315.jpg" alt="Profile image example"/>


        <?php if(isset($photo_header)) { foreach($photo_header as $row) { ?>
            <img align="left" class="fb-image-profile thumbnail" src="<?php echo base_url(); ?><?php echo $row->path;?>/<?php echo $row->file_name;?>" alt="Profile image example"/>
            <?php
        }
        }?>

        <?php if(empty($photo_header)) { ?>
            <img align="left" class="fb-image-profile thumbnail" src="<?php echo base_url(); ?>assets/img/profile_img.png" alt="Profile image example"/>
        <?php } ?>



        <div class="fb-profile-text" class="col-xs-12 col-md-12">
            <h1> <?php
               /* echo $_SESSION['user_code'];*/
                ?></h1>

            <?php if (isset($_SESSION['member_type'])) {   ?>

                <form method="post" action="upload_photo" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="header">
                    <label>Upload รูปภาพ</label>
                    <div  >
                        <input name="file" class="input-file" type="file">
                        <?php echo form_error('file','<p class="help-block">','</p>'); ?>
                        <input type="submit" class="btn btn-success btn-lg" name="uploadFile" value="UPLOAD">
                    </div>
                </form>

                <?php
            }?>


            <br>
        </div>
        <div class="col-xs-12 col-md-12">
            <!--<div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
                        <h1 class="rating-num">
                            4.0</h1>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                                        </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                                        </span><span class="glyphicon glyphicon-star-empty"></span>
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span>1,050,008 total
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6" >
                        <div class="row rating-desc">
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>5
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>4
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>3
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>2
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>1
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>-->
        </div>

    </div>



    <?php if (isset($_SESSION['member_type'])) {  if($_SESSION['member_type'] == 'trainer'){ ?>


        <form method="post" action="upload_ex_photo" enctype="multipart/form-data">
            <input type="hidden" name="type" value="exp">
            <div class="form-group" >
                <label class="col-md-12 control-label" for="Upload photo" >อัพโหลดรูป</label>
                <div class="col-md-12">
                    <input id="file_ex" name="file_ex" class="input-file" type="file">
                    <?php echo form_error('file_ex','<p class="help-block">','</p>'); ?>
                    <input type="submit" class="btn btn-success btn-lg" name="uploadFile" value="UPLOAD">
                </div>

            </div>
        </form>
        <br><br>
        <br><br>
        <?php
    }
    }?>

    <div class="col-xs-12 col-md-12">
        <?php
        if(isset($photo_ex)){
            foreach($photo_ex as $row)
            {
                ?>

                <div class="gallery_product col-sm-4 col-xs-6 col-md-3 col-lg-3 filter hdpe">


                    <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo base_url(); ?><?php echo $row->path;?>/<?php echo $row->file_name;?>">
                        <img class="img-responsive" alt="" src="<?php echo base_url(); ?><?php echo $row->path;?>/<?php echo $row->file_name;?>" />
                        <div class='text-right'>
                            <small class='text-muted'>ผลงาน</small>
                        </div> <!-- text-right / end -->
                    </a>


                </div>
                <?php

            }
        }

        ?>
    </div>

    <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter sprinkle">
        <img src="http://placehold.it/450x250" class="img-responsive">
    </div>

    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
        <img src="http://placehold.it/450x250" class="img-responsive">
    </div>

    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter irrigation">
        <img src="http://placehold.it/450x250" class="img-responsive">
    </div>

    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter spray">
        <img src="http://placehold.it/450x250" class="img-responsive">
    </div>-->

    <!-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter irrigation">
         <img src="http://placehold.it/450x250" class="img-responsive">
     </div>-->
</div>

<div class="container" >
    <div class="flatPanel panel" >
        <?php if($_SESSION['member_type'] == 'member') { ?>
            <?php if (isset($_SESSION['editPortfolio'])){

                if($_SESSION['editPortfolio']){
                    include("profile_member_edit.php");

                }else{
                    include("profile_member_info.php");

                }
            }else{
                include("profile_member_info.php");
            } ?>

            <?php
        }else { ?>

            <?php if (isset($_SESSION['member_type'])) {  if($_SESSION['member_type'] == 'trainer'){ ?>
                <button type="button" style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" class="btn btn btn-danger" >
                    <a href="<?php echo base_url();?>webboard/topic" >
                        <font size="4" style="color: white;"><?=label("strNew"); ?></font>
                    </a>
                </button>
                <?php
            }
            }?>



            <table border="0" cellpadding="0" cellspacing="0" align="center" class="table">
                <?php
                include ("template/webboard_trainer_info.php");
                ?>

            </table>


            <?php if($_SESSION['member_type'] == 'trainer'){ ?>

                <?php if (isset($_SESSION['editPortfolio'])){

                    if($_SESSION['editPortfolio']){
                        include("profile_trainer_edit.php");

                    }else{
                        include("profle_trainer_info.php");

                    }
                }else{
                    include("profle_trainer_info.php");
                } ?>

            <?php } elseif ( $_SESSION['member_type'] == 'ftcenter'){?>
                <?php if (isset($_SESSION['editPortfolio'])){

                    if($_SESSION['editPortfolio']){
                        include("profile_fitness_edit.php");

                    }else{
                        include("profile_fitness_info.php");

                    }
                }else{
                    include("profile_fitness_info.php");
                } ?>

            <?php }?>

            <?php
        }?>


    </div>
</div>




<footer class="footer text-center"  style="background-image: url(<?php echo base_url(); ?>assets/img/back_header.png)">
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
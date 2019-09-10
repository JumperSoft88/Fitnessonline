
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
    <?php include("template/header_nav.php") ?>
</nav>


<?php  if (isset($_SESSION['username'])){ ?>
    <div ><a style="text-align: left"> ยินดีต้อนรับ คุณ , <?php echo $_SESSION['username'];?></a></div>
    <?php
} ?>


<div class="container">
    <?php
    include ("template/header_carousel.php");
    ?>
</div>
<br>
<!-- <img src="http://www.fitnessonline.co.th//fitness/img/topic03.png" style="width:100%" alt="Image" />-->


<div ><a style="text-align: left"> </a></div>
<fieldset>
    <legend style="font-family: sans-serif;color: red">Fitness Center</legend>
</fieldset>
<table border="0" cellpadding="0" cellspacing="0" align="center" class="table">
    <?php
    include ("template/webboard_off_info.php");
    ?>

</table>

<div class="row">
    <div class="col-md-12 text-center">
        
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


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
    <?php include("template/header_login.php") ?>
</nav>

<div class="container text-center">


    <div class="col-sm-6">
        <!--img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"-->
        <a href="<?php echo base_url(); ?>auth/login"><img src="<?php echo base_url(); ?>assets/img/welcome.png" alt="Image" class="img-responsive" style="width:100%"/> </a>

    </div>


</div><br>





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


<!-- Navigation -->
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/Final_LOGO_fitnessOnline_R.png" alt="" width="190" height="40" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li ><a href="<?php echo base_url(); ?>"><?=label("strHome"); ?></a></li>
            <li><a href="<?php echo base_url(); ?>info/ebookfit">Ebook</a></li>
            <li><a href="<?php echo base_url();?>info/aboutfit"><?=label("aboutfit"); ?></a></li>
            <li><a href="<?php echo base_url();?>auth/select_registration"><?=label("strRegister"); ?></a></li>
            <li><a href="<?php echo base_url();?>info/contact"><?=label("strContact"); ?></a></li>


            <?php if (isset($_SESSION['member_type'])) {  ?>
                <li><a href="<?php echo base_url();?>info/profile"><?=label("strProfile"); ?></a></li>
                <?php

            }?>

                </li>


                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=label("strAdmin"); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>info/admin">Setup Trainer</a></li>
                        <li><a href="<?php echo base_url();?>info/admin_history_trainer">History Trainer</a></li>
                        <li><a href="<?php echo base_url();?>info/admin_history_login">History Login</a></li>
                        <li><a href="">Report</a></li>
                    </ul>
                </li>



            <li><?=anchor("welcome/change/thailand","ไทย");?></li>
            <li><?=anchor("welcome/change/english","English");?></li>
            <li><a href="<?php echo base_url();?>auth/login"><span class="glyphicon glyphicon-log-in"></span> <?=label("strLogin"); ?></a></li>

            <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
        </ul>
    </div>
</div>
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
            <li><a href="<?php echo base_url(); ?>"><?=label("strHome"); ?></a></li>
            <li><a href="<?php echo base_url(); ?>info/ebookfit">Ebook</a></li>
            <li ><a href="<?php echo base_url();?>info/aboutfit"><?=label("aboutfit"); ?></a></li>
            <li ><a href="<?php echo base_url();?>auth/select_registration"><?=label("strRegister"); ?></a></li>
            <li><a href="<?php echo base_url();?>info/contact"><?=label("strContact"); ?></a></li>
            <li class="active"><a href="<?php echo base_url();?>info/login"><span class="glyphicon glyphicon-log-in"></span> <?=label("strLogin"); ?></a></li>
        </ul>
    </div>
</div>
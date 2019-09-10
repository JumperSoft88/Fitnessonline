<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style type="text/css">

    .btn-default.btn-on.active{background-color: #5BB75B;color: white;}
    .btn-default.btn-off.active{background-color: #DA4F49;color: white;}

    .btn-default.btn-on-1.active{background-color: #006FFC;color: white;}
    .btn-default.btn-off-1.active{background-color: #DA4F49;color: white;}

    .btn-default.btn-on-2.active{background-color: #00D590;color: white;}
    .btn-default.btn-off-2.active{background-color: #A7A7A7;color: white;}

    .btn-default.btn-on-3.active{color: #5BB75B;font-weight:bolder;}
    .btn-default.btn-off-3.active{color: #DA4F49;font-weight:bolder;}

    .btn-default.btn-on-4.active{background-color: #006FFC;color: #5BB75B;}
    .btn-default.btn-off-4.active{background-color: #DA4F49;color: #DA4F49;}

</style>
<form class="form-horizontal" method="POST" action="phpexcel/download">
    <button type="submit" class="btn btn-success btn-lg" name="export_excel" >Export</button>
</form>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
            <form class="form-horizontal" method="POST" action="searchInfo">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="username">
                    <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                 </button>
                 </span>
                </div><!-- /input-group -->
            </form>
        </div>
    </div>
</div>

<div class="table-responsive" style="margin-top: 2%">
    <table border="0" cellpadding="0" cellspacing="0" align="center"  class="table table-bordred table-striped">
        <thead>
        <tr style="color: #ffffff;">
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;">ลำดับ</th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("ชื่อ - นามสกุล"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("ชื่อผู้ใช้งาน"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("ชนิดผู้ใช้งาน"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("สถานะระบบ"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("สถานะยืนยัน"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" ><?=label("setup"); ?></th>
        </tr>
        </thead>

        <tbody>

        <?php
        if(isset($_SESSION['resultSearch'] )){

            $index = 1;
            foreach ($_SESSION['resultSearch']  as $row){
                ?>

                <tr style="color:#7d0000">
                    <!--td ><!--?php echo $index;?></td-->
                    <th width="50"><?php echo $index?></th>
                    <th><?php if(isset($row->frist_name)){ echo $row->frist_name;}?>  <?php if (isset($row->last_name)){echo $row->last_name;}?></th>
                    <th ><?php echo $row->member_username ?></th>
                    <th><?php echo $row->member_type?></th>
                    <th><?php echo $row->status_system?></th>
                    <th><?php if(isset($row->activeted)){   echo $row->activeted == 1 ? 'ยินยัน' : 'รอการยืนยัน';} ?></th>
                    <th> <a href="searchInfoByUserId/<?php echo $row->member_id ?>"><button class="btn btn-primary btn-xs"  ><span class="glyphicon glyphicon-search">  </span></button>  </a> </th>
                </tr>
                <?php
                $index++;

            }

        }

        ?>



        </tbody>

    </table>
</div>

<div class="panel panel-info" style="margin-top: 5%" >
    <div class="panel-heading" style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)">  <h4 style="color: white">User Profile</h4></div>


    <div class="panel-body">

        <div class="col-md-12 form-group">
<form method="post" action="submitApproveTrainer">
            <?php if(isset($_SESSION['resultByMemberId'])){

                foreach ($_SESSION['resultByMemberId']  as $row) {

                ?>

                    <legend><?php if(isset($row->frist_name)){ echo $row->frist_name;}?>  <?php if (isset($row->last_name)){echo $row->last_name;}?></legend>


                    <div class="container" style="margin-top:20px;">
                        <div class="row">
                            <div class="col-md-6 col-xl-8">
                                <label class="col-md-4 col-xl-8 control-label">สถานะการใช้ระบบ</label>
                                <div class="btn-group" id="status" data-toggle="buttons">
                                    <label class="btn btn-default btn-on <?php if($row->status_system =='on'){?> active  <?php }?>   ">
                                        <input type="radio" value="on" name="status_system"   <?php if($row->status_system =='on'){?> checked="checked"  <?php }?> >ON</label>
                                    <label class="btn btn-default btn-off <?php if($row->status_system =='off'){?> active  <?php }?>   ">
                                        <input type="radio" value="off" name="status_system" <?php if($row->status_system =='off'){?> checked="checked"  <?php }?> >OFF</label>
                                </div>

                            </div>
                            <div class="col-md-6 col-xl-8">
                                <label class="col-md-4 col-xl-8 control-label">สถานะยืนยันใช้งานระบบ</label>
                                <div class="btn-group" id="status" data-toggle="buttons">
                                    <label class="btn btn-default btn-on <?php if($row->activeted =='1'){?> active  <?php }?> ">
                                        <input type="radio" value="1" name="activeted" <?php if($row->activeted=='1'){?> checked="checked"  <?php }?>>ON</label>
                                    <label class="btn btn-default btn-off <?php if($row->activeted =='0' or $row->activeted == '' ){?> active  <?php }?>  ">
                                        <input type="radio" value="0" name="activeted" <?php if($row->activeted=='0' or $row->activeted == ''){?> checked="checked"  <?php }?> >OFF</label>
                                </div>

                            </div>
                            <div class="col-md-6 col-xl-8 ">
                                <label class="col-md-4 col-xl-8 control-label">ส่งอีเมลล์เพื่อยืนยัน</label>
                                <div class="btn-group" id="status" data-toggle="buttons">
                                    <label class="btn btn-default btn-on  ">
                                        <input type="radio" value="1" name="isSentEmail" >ON</label>
                                    <label class="btn btn-default btn-off active ">
                                        <input type="radio" value="0" name="isSentEmail" checked="checked"> OFF</label>
                                </div>

                            </div>
                        </div>

                    </div>



            <?php

                }

            } ?>


        </div>
        <div  style="text-align: right;margin-bottom: 1%;margin-right: 1%">

            <button type="submit" class="btn btn-success btn-lg" name="submitApproveTrainer" >บันทึกข้อมูล</button>
            <a class="btn btn-danger btn-lg" href="cancelEditProfile" role="button">ยกเลิก</a>
        </div>

    </div>

    </form>
</div>
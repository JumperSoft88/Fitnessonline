<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-lg-3">
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
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("สถานะเข้าระบบ"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("สถานะในระบบ"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("สถานะยืนยัน"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" style="color: #ffffff;"><?=label("ความสามารถ"); ?></th>
            <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" ><?=label("setup"); ?></th>
        </tr>
        </thead>

        <tbody>

        <?php
        if(isset($resultSearch )){

            $index = 1;
            foreach ($resultSearch  as $row){


                ?>

                <tr style="color:#7d0000">
                    <!--td ><!--?php echo $index;?></td-->
                    <th width="50"><?php echo $index?></th>
                    <th><?php echo $row->first_name?>  <?php echo $row->last_name?></th>
                    <th >ชื่อผู้ใช้งาน</th>
                    <th><?php echo $row->province?></th>
                    <th><?php echo $row->region?></th>
                    <th><?php echo $row->name?></th>
                    <th>xxx</th>
                    <th> <a href="welcome/getProfileTechnic/<?php echo $row->user_id ?>"><button class="btn btn-primary btn-xs"  ><span class="glyphicon glyphicon-search">  </span></button>  </a> </th>
                </tr>
                <?php
                $index++;

            }

        }

        ?>



        </tbody>

    </table>
</div>
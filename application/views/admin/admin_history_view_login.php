<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<table border="0" cellpadding="0" cellspacing="0" align="center" class="table">
    <thead>
    <tr style="color: #ffffff;">
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="5%" style="color: #ffffff;"><?=label("ชื่อผู้ใช้งาน"); ?></th>
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="10%">ชื่อ นามสกุล</th>
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="5%">อีเมลล์</th>
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="10%"><?=label("ชนิดผู้ใช้งาน"); ?></th>
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="10%"><?=label("เข้าระบบวันที่"); ?></th>
    </tr>
    </thead>

    <tbody>
    <?php  if($_SESSION['historyTrainer']){

        $index = 1;

        foreach ( $_SESSION['historyTrainer'] as $row){

               ?>
    <tr style="color:#7d0000">
            <th><?php echo $row->username?></th>
            <th><?php if(isset($row->frist_name)){ echo $row->frist_name;}?> <?php if(isset($row->last_name)){ echo $row->last_name;}?></th>
            <th><?php echo $row->email?></th>
            <th><?php echo $row->member_type?></th>
            <th><?php echo $row->createdDate?></th>
    </tr>
            <?php
            $index++;
            }

    } ?>


    </tbody>

</table>

<div class="row">
    <div class="col-md-12 text-center">
        <?php echo $_SESSION['historyTrainerpagination2']; ?>
    </div>
</div>


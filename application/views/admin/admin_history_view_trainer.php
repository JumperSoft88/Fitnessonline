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
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="10%">หัวข้อกระทู้</th>
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="5%">ชื่อผู้ตั้งกระทู้</th>
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="10%"><?=label("ชนิดผู้ใช้งาน"); ?></th>
        <th style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)" width="10%"><?=label("เข้าระบบวันที่"); ?></th>
    </tr>
    </thead>

    <tbody>
    <?php  if($_SESSION['historyViewTrainer']){

        $index = 1;

        foreach ( $_SESSION['historyViewTrainer'] as $row){

            ?>
            <tr style="color:#7d0000">
                <th><?php echo $row->his_username?></th>
                <th><?php echo $row->detail ?></th>
                <th><?php echo $row->his_username_trainer?></th>
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
        <?php echo $_SESSION['historyTrainerpagination3']; ?>
    </div>
</div>


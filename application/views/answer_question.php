
<?php

    if($answer_posts != 'none'){
        ?>

        <?php foreach ($answer_posts as $row_answer) { ?>

            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="thumbnail">
                            <img class="img-responsive user-photo"
                                 src="http://nass.gov.ng/assets/frontend/pages/img/people/img7-large.jpg">
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-1 -->

                    <div class="col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>ชื่อผู้ตอบ :</strong> <?php echo $row_answer->name; ?>&nbsp;&nbsp;<strong>อีเมล์
                                    :</strong> <?php echo $row_answer->email; ?>&nbsp;
                                <div align="right">
                                    <strong>วันที่ตั้งกระทู้ :</strong> <?php echo $row_answer->created; ?>&nbsp;
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php echo $row_answer->detail; ?>&nbsp;
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->
                </div><!-- /row -->
            </div><!-- /container -->

            <?php
        }
        ?>

<?php

    }
?>

<?php if (isset($_SESSION['answer']) ) { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>webboard/answer_question/<?php echo $row->id;?>">
                        <fieldset>
                            <legend class="text-center">ตอบคำถาม</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">ชื่อผู้ตอบ</label>
                                <div class="col-md-9">
                                    <label class="col-md-3 control-label" for="name"><?php echo $_SESSION['username']?></label>
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">E-mail</label>
                                <div class="col-md-9">
                                    <label class="col-md-3 control-label" for="name"><?php echo $_SESSION['email']?></label>
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">รายละเอียด</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="detail"  rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg" name="submit_answer">บันทึกข้อมูล</button>
                                    <button type="button" class="btn btn-danger btn-lg" name="Submit2_cancel"  onclick="history.back();">ยกเลิก</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
} else{ ?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
            <form class="form-horizontal" method="post" action="<?php echo base_url();?>webboard/answer_question/<?php echo $row->id;?>">
                <fieldset>
                    <legend class="text-center">กรุณา เข้าสู่ระบบ</legend>

                    <!-- Name input-->
                    <div class="col-md-12" style="text-align: center">

                        <a href="<?php echo base_url();?>auth/login"><span class="glyphicon glyphicon-log-in"></span>เข้าสู่ระบบ</a>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>

    <?php
}  ?>
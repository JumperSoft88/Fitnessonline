<div class="flatPanel panel-heading" style="background-image: url(http://jumpersoft88.com/fitnessonline/img/back_header.png)"> <h5 style="color: #ffffff;">โปรไฟล์</h5></div>
<div class="panel-body" >
    <div class="flatPanel panel panel-default">
        <div class="panel-body">
            <div class="col-md-12 col-sm-12">
                <?php   foreach($data_profile as $row) { ?>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">ประเภทสมาชิก :</label>
                        <label >Fitness Center</label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">ชื่อผู้ใช้งาน :</label>
                        <label ><?php echo $row->member_username ?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">ชื่อ - นามสกุล :</label>
                        <label ><?php echo $row->frist_name ?>  <?php echo $row->last_name ?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">เลขที่ประจำตัวประชาชน :</label>
                        <label ><?php echo $row->id_card;?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">สมัครสมาชิก :</label>
                        <label > <?php if($row->price == '2,000'){
                                echo 'รายเดือน ';
                            }elseif ($row->price == '15,000'){
                                echo 'รายปี ';
                            } ?>    <?php echo '(' ?><?php echo $row->price;?><?php echo ')' ?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="reportsList" style="color: #1b29ff;">อายุ : </label>
                        <label ><?php echo $row->age;?> <?php echo 'ปี' ?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="reportsList" style="color: #1b29ff;">เพศ : </label>
                        <label ><?php echo $row->gender;?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">เบอร์โทรที่ทำงาน :</label>
                        <label ><?php echo $row->telephone1;?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">เบอร์โทรติดต่อ :</label>
                        <label ><?php echo $row->telephone2;?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">ประสบการณ์ :</label>
                        <label ><?php echo $row->work_exprerience;?> <?php echo 'ปี' ?></label>
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">ที่อยู่ :</label>
                        <label ><?php echo $row->address1;?> <?php echo $row->address2;?> <?php echo $row->province_name;?> <?php echo $row->postcode;?></label>
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">อีเมลล์ :</label>
                        <label ><?php echo $row->email;?></label>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label style="color: #1b29ff;">เกี่ยวกับคุณ :</label>
                        <label ><?php echo $row->member_overview;?></label>
                    </div>
                    <?php
                } ?>


            </div>

        </div>
    </div>
</div>

<div  style="text-align: right">
    <button type="button" style=" text-align: center" class="btn btn btn-info" >
        <a href="editpPortfolio" >
            <font size="4" style="color: white;">แก้ไขข้อมูล</font>
        </a>
    </button>
</div>
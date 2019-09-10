<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <form class="form-horizontal"  method="POST" action="update_trainer" >
                <fieldset>
                    <!-- Form Name -->
                    <legend >แบบฟอร์มข้อมูลส่วนตัว</legend>

                    <?php foreach($data_profile as $row) {?>
                        <input type="hidden" name="id" value="<?php echo $row->member_id;?>">
                        <!-- Text input (fullname)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" >ชื่อ - นามสกุล</label>
                            <div class="col-md-4  col-xs-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="frist_name" name="frist_name" type="text" value="<?php echo $row->frist_name;?>" placeholder="ชื่อ" class="form-control input-md">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="last_name" name="last_name" type="text" value="<?php echo $row->last_name;?>" placeholder="นามสกุล" class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- File Button -->
                        <!--<div class="form-group" >
                            <label class="col-md-4 control-label" for="Upload photo" >Upload photo</label>
                            <div class="col-md-4">
                                <input id="photo_path" name="photo_path" class="input-file" type="file">
                            </div>
                        </div>-->

                        <!-- Text input-->

                        <!-- Text input (member_username)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="" >อายุ(ปี)</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="age" name="age" type="text" placeholder="อายุ" value="<?php echo $row->age;?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>


                        <!-- Multiple Radios (gender) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Gender" >เพศ</label>
                            <div class="col-md-4">
                                <label class="radio-inline" for="Gender-0" >
                                    <input type="radio" name="gender" id="gender" value="ชาย" <?php if($row->gender=='ชาย' or $row->gender == null){?> checked="checked"  <?php }?> >
                                    ชาย
                                </label>
                                <label class="radio-inline" for="Gender-1" >
                                    <input type="radio" name="gender" id="gender" value="หญิง"  <?php if($row->gender=='หญิง'){?> checked="checked"  <?php }?> >
                                    หญิง
                                </label>
                            </div>
                        </div>


                        <!-- Multiple Radios (status) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="radios" >สถานะ:</label>
                            <div class="col-md-4">
                                <label class="radio-inline" for="radios-0" >
                                    <input type="radio" name="status" id="status" value="marriage" <?php if($row->status=='marriage' or $row->status == null){?> checked="checked"  <?php }?> >
                                    แต่งงาน
                                </label>
                                <label class="radio-inline" for="radios-1" >
                                    <input type="radio" name="status" id="status" value="sigle"  <?php if($row->status=='sigle'){?> checked="checked"  <?php }?> >
                                    โสด
                                </label>
                            </div>
                        </div>

                        <!-- Text input(address)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label col-xs-12" for="Permanent Address" >ที่อยู่ติดต่อ</label>
                            <div class="col-md-4  col-xs-12">
                                <input id="address1" name="address1" type="text" placeholder="บ้านเลขที่" value="<?php echo $row->address1;?>" class="form-control input-md ">
                            </div>
                            <div class="col-md-4  col-xs-12">
                                <input id="address2" name="address2" type="text" placeholder="เขต" value="<?php echo $row->address2;?>" class="form-control input-md ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address" >จังหวัด</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <select class="form-control" name="province_id" value="<?php echo $row->province_id?>">
                                        <option value="0" selected>จังหวัด</option>
                                        <?php foreach($_SESSION['province'] as $row_provice){ ?>


                                            <?php if($row->province_id == $row_provice->id ){

                                                ?>

                                                <option value="<?php echo $row_provice->id ?>" name="<?php echo $row_provice->province ?>" selected><?php echo $row_provice->province ?></option>
                                                <?php

                                            }else{

                                                ?>
                                                <option value="<?php echo $row_provice->id ?>" name="<?php echo $row_provice->province ?>"><?php echo $row_provice->province ?></option>
                                                <?php
                                            }
                                        }?>




                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Text input (address3)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address" >รหัสไปรษณีย์</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <input id="postcode" name="postcode" type="text" placeholder="รหัสไปรษณีย์" maxlength="5"
                                           value="<?php echo $row->postcode?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- Text input(telephone1)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Phone number " >เบอร์โทรติดต่อ </label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input id="telephone1" name="telephone1" maxlength="10" type="text" value="<?php echo $row->telephone1;?>" placeholder="มือถือ" class="form-control input-md">
                                </div>
                                <div class="input-group othertop">
                                    <div class="input-group-addon">
                                        <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
                                    </div>
                                    <input id="telephone2" name="telephone2" maxlength="10" type="text" placeholder=" ที่ทำงาน/บ้าน" value="<?php echo $row->telephone2;?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="License No." >เลขที่บัตรประชาชน</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-sticky-note-o"></i>
                                    </div>
                                    <input id="id_card" maxlength="13" name="id_card" type="text" placeholder="License No."  value="<?php echo $row->id_card;?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- Multiple Radios (price) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="price" >สมัครสมาชิก</label>
                            <div class="col-md-8">
                                <label class="radio-inline" for="price" >
                                    <input type="radio" name="price" id="price" value="2,000" <?php if($row->price == '2,000') {?> checked="checked" <?php } ?> >
                                    รายเดือน 2,000 บาท
                                </label>
                                <label class="radio-inline" for="price" >
                                    <input type="radio" name="price" id="price" value="15,000"  <?php if($row->price == '15,000') {?> checked="checked" <?php } ?> >
                                    รายปี 15,000 บาท
                                </label>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Working Experience (time period)">ประสบการณ์(ปี)</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input id="work_exprerience" name="work_exprerience" type="text" value="<?php echo $row->work_exprerience;?>" placeholder="Enter time period " class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Overview (max 200 words)">เกี่ยวกับคุณ</label> <!--Overview (max 200 words) -->
                            <div class="col-md-4">
                                <textarea class="form-control" rows="10"  id="member_overview" name="member_overview"><?php echo $row->member_overview;?></textarea>
                            </div>
                        </div>

                        <?php
                    }?>

                    <div  style="text-align: right">
                        <button type="submit" style=" text-align: center" class="btn btn-success btn-lg" >

                            <font size="4" style="color: white;">บันทึกข้อมูล</font>

                        </button>
                        <button type="button" style=" text-align: center" class="btn btn-danger btn-lg" >
                            <a href="cancelProfileInfo_trainer" >
                                <font size="4" style="color: white;">ยกเลิก</font>
                            </a>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
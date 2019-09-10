<div class="container" >
    <div class="row" >
        <div class="col-md-10 ">
            <form class="form-horizontal" method="POST" action="profile_member_edit" >
                <fieldset>
                    <!-- Form Name -->
                    <legend>Edit user profile member </legend>

                    <?php   foreach($data_profile as $row) { ?>

                        <!-- Text input (member_username)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="member username" >ชื่อ</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="frist_name" name="frist_name" type="text" placeholder="ชื่อ"
                                           value="<?php echo $row->frist_name?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="member username" >นามสกุล</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="last_name" name="last_name" type="text" placeholder="Username"
                                           value="<?php echo $row->last_name?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- Multiple Radios (price) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="price" >เพศ</label>
                            <div class="col-md-8">
                                <label class="radio-inline" for="gender" >
                                    <input type="radio" name="gender" id="gender" value="ชาย" <?php if($row->gender == 'ชาย'){?> checked="checked" <?php } ?> >
                                    Male
                                </label>
                                <label class="radio-inline" for="price" >
                                    <input type="radio" name="gender" id="gender" value="หญิง" <?php if($row->gender == 'หญิง'){?> checked="checked" <?php } ?> >
                                    Female
                                </label>

                            </div>
                        </div>

                        <!-- Text input (email)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address" >เบอร์โทรติดต่อ</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone "></i>
                                    </div>
                                    <input id="telephone1" name="telephone1" type="text" placeholder="เบอร์โทร"
                                           value="<?php echo $row->telephone1?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- Text input (address1)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address" >ที่อยู่</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <input id="address1" name="address1" type="text" placeholder="ที่อยู่"
                                           value="<?php echo $row->address1?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- Text input (address2)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address" ></label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <input id="address2" name="address2" type="text" placeholder="เขต"
                                           value="<?php echo $row->address2?>" class="form-control input-md">
                                </div>
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

                        <!-- Text input (email)-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address" >Email</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <input id="email" name="email" type="text" placeholder="Email Address"
                                           value="<?php echo $row->email?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>



                        <div  style="text-align: right">
                            <button type="submit" style=" text-align: center" class="btn btn-success btn-lg" >

                                    <font size="4" style="color: white;">บันทึกข้อมูล</font>

                            </button>
                            <button type="button" style=" text-align: center" class="btn btn-danger btn-lg" >
                                <a href="cancelEditpPortfolio" >
                                    <font size="4" style="color: white;">ยกเลิก</font>
                                </a>
                            </button>
                        </div>
                </fieldset>

                <?php } ?>
            </form>
        </div>
    </div>
</div>
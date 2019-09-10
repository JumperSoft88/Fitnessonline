<thead>
<tr style="color: #ffffff;">
    <!--th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strNo"); ?></th-->
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"></th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg)" style="color: #ffffff;"><?=label("strTopics"); ?></th>
    <!--th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);">vote</th-->

    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="5%">Status</th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strRead"); ?></th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strAnswer"); ?></th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strCreated"); ?></th>
</tr>
</thead>

<tbody>

<?php if(isset($_SESSION['username']) ){
    if($_SESSION['username'] == 'test01'){
        echo $_SESSION['username'];
    }

}?>

    <tr style="color:#7d0000">
        <!--td ><!--?php echo $index;?></td-->
        <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/profile_img1.png" /></th>
        <td style="text-align:left"><a> Fitness Center รัชดา บริการ 24 ชม. </a></td>
        <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/Dotred.png" /></th>
        <th>0</th>
        <th>0</th>
        <th></th>
    </tr>
    <tr style="color:#7d0000">
        <!--td ><!--?php echo $index;?></td-->
        <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/profile_img1.png" /></th>
        <td style="text-align:left"><a> Fitness Center ลาดพร้าว สนใจติดต่อ </a></td>
        <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/Dotred.png" /></th>
        <th>0</th>
        <th>0</th>
        <th></th>
    </tr>

<tr style="color:#7d0000">
    <!--td ><!--?php echo $index;?></td-->
    <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/profile_img1.png" /></th>
    <td style="text-align:left"><a> Fitness Center จังหวัดอุดรธานี สนใจติดต่อ </a></td>
    <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/Dotred.png" /></th>
    <th>0</th>
    <th>0</th>
    <th></th>
</tr>
<tr style="color:#7d0000">
    <!--td ><!--?php echo $index;?></td-->
    <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/profile_img1.png" /></th>
    <td style="text-align:left"><a> Fitness Center จังหวัด ขอนแก่น สนใจติดต่อ </a></td>
    <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/Dotred.png" /></th>
    <th>0</th>
    <th>0</th>
    <th></th>
</tr>
<tr style="color:#7d0000">
    <!--td ><!--?php echo $index;?></td-->
    <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/profile_img1.png" /></th>
    <td style="text-align:left"><a> Fitness Center จังหวัด โคราช สนใจติดต่อ </a></td>
    <th style="text-align: center"><img src="<?php echo base_url();?>/assets/img/Dotred.png" /></th>
    <th>0</th>
    <th>0</th>
    <th></th>
</tr>
</tbody>

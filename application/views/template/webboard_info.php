<thead>
    <tr style="color: #ffffff;">
        <!--th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strNo"); ?></th-->
        <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"></th>
        <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg)" style="color: #ffffff;"><?=label("strTopics"); ?></th>
        <!--th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);">vote</th-->

        <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="5%">Status</th>
        <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strRead"); ?></th>
    <!--    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strAnswer"); ?></th>
        <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strCreated"); ?></th>
    -->
    </tr>
</thead>

<tbody>


<?php if(isset($posts)){ $index = 1;  foreach($posts as $row){?>
    <tr style="color:#7d0000">
        <!--td ><!--?php echo $index;?></td-->


        <!--<td width="2%" ><img alt="" src="" /></td>-->
        <?php if(!empty($photo_header)) { ?>

            <?php foreach($photo_header as $row1){

                if($row->name == $row1->username){
            ?>
                    <td > <img align="center" width="80" height="40" class="img-responsive img-thumbnail img-circle center-block" src="<?php echo base_url(); ?><?php echo $row1->path;?>/<?php echo $row1->file_name;?>" alt="Profile image example"/></td>
            <?php

                }else{

            ?>

                    <th type="text-align: center"><img src="<?php echo base_url(); ?>/assets/img/profile_img1.png"/></th>
            <?php


                }

            } ?>

           <!-- <td width="2%" ><img alt="" src="" /></td>-->
        <?php } ?>


        <td style="text-align:left"><a href="view_post/<?php echo $row->id;?>"><?php echo $row->topic;?></a></td>

        <?php  if(isset($row->status_system) and $row->status_system == 'on'){

         ?>
            <th style="text-align: center" >รับงาน</th>

        <?php
        }else{ ?>
            <th style="text-align: center">ปิดรับงาน</th>
        <?php
        }
        ?>

        <!--th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);">vote</th-->
        <th><?php echo $row->view;?></th>

    </tr>
<?php $index++;}}?>

</tbody>

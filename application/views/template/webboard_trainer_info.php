<thead>
<tr style="color: #ffffff;">
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg)" style="color: #ffffff;"><?=label("strTopics"); ?></th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strRead"); ?></th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strAnswer"); ?></th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strCreated"); ?></th>
    <th style="background-image: url(https://cdn.yborcityonline.com/wp-content/uploads/2016/10/Red-Brick-Background-01-Copy-1170x1500.jpg);" width="10%"><?=label("strdeleted"); ?></th>
</tr>
</thead>

<tbody>


<?php if(isset($question_trainer)){ $index = 1;  foreach($question_trainer as $row){?>
    <tr style="color:#7d0000">
        <td style="text-align:left"><a href="<?php echo base_url(); ?>webboard/view_post/<?php echo $row->id;?>"><?php echo $row->topic;?></a></td>
        <th><?php echo $row->view;?></th>
        <th><?php echo $row->reply;?></th>
        <th><?php echo $row->created;?></th>
        <th style="text-align: center">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                <?=label("strdeleted"); ?>
                </button></th>

    </tr>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?=label("strConfirmdeleted"); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?=label("strConfirmdetaildeleted"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=label("strClose"); ?></button>
                <button type="button" class="btn btn-danger"><?=label("strdeleted"); ?></button>
            </div>
        </div>
    </div>
</div>

</tbody>


    <?php $index++;}}?>





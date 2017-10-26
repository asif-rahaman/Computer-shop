
<tr><th colspan="2">Camera</th></tr>
<?php if (get_field('camera_type')) { ?>
<tr><td class="sp_type">Camera Type</td><td><?php echo get_field('camera_type'); ?></td></tr>
<?php } ?>
<?php if (get_field('video_resolution')) { ?>
<tr><td class="sp_type">Video Resolution</td><td><?php echo get_field('video_resolution'); ?></td></tr>
<?php } ?>
<?php if (get_field('image_resolution')) { ?>
<tr><td class="sp_type">Image Resolution</td><td><?php echo get_field('image_resolution'); ?></td></tr>
<?php } ?>
<?php if (get_field('front_camera')) { ?>
<tr><td class="sp_type">Front Camera</td><td><?php echo get_field('front_camera'); ?></td></tr>
<?php } ?>
<?php if (get_field('rear_camera')) { ?>
<tr><td class="sp_type">Rear Camera</td><td><?php echo get_field('rear_camera'); ?></td></tr>
<?php } ?>

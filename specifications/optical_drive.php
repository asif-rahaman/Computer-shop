
<tr><th colspan="2">Optical Drive</th></tr>
<?php if (get_field('optical_drive')) { ?>
<tr><td class="sp_type">Optical drive</td><td><?php echo get_field('optical_drive'); ?></td></tr>
<?php } ?>
<?php if (get_field('compatible_media')) { ?>
<tr><td class="sp_type">Compatible media</td><td><?php echo get_field('compatible_media'); ?></td></tr>
<?php } ?>
<?php if (get_field('optical_disc_support')) { ?>
<tr><td class="sp_type">Front Camera</td><td><?php echo get_field('optical_disc_support'); ?></td></tr>
<?php } ?>

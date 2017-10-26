
<tr><th colspan="2">Basic Info</th></tr>
<?php if (get_field('brand')) { ?>
<tr><td class="sp_type">Brand</td><td><?php echo get_field('brand'); ?></td></tr>
<?php } ?>
<?php if (get_field('model')) { ?>
<tr><td class="sp_type">Model</td><td><?php echo get_field('model'); ?></td></tr>
<?php } ?>
<?php if (get_field('type')) { ?>
<tr><td class="sp_type">Type</td><td><?php echo get_field('type'); ?></td></tr>
<?php } ?>


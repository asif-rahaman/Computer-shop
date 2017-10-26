
<tr><th colspan="2">Desktop Info</th></tr>
<?php if (get_field('desktop_model')) { ?>
<tr><td class="sp_type">Desktop Model</td><td><?php echo get_field('desktop_model'); ?></td></tr>
<?php } ?>
<?php if (get_field('has_monitor')) { ?>
<tr><td class="sp_type">Monitor</td><td><?php echo get_field('has_monitor'); ?></td></tr>
<?php } ?>
<?php if (get_field('monitor_brand')) { ?>
<tr><td class="sp_type">Monitor brand</td><td><?php echo get_field('monitor_brand'); ?></td></tr>
<?php } ?>
<?php if (get_field('monitor_size')) { ?>
<tr><td class="sp_type">Monitor Size</td><td><?php echo get_field('monitor_size'); ?></td></tr>
<?php } ?>


<tr><th colspan="2">Battery</th></tr>
<?php if (get_field('chemistry')) { ?>
<tr><td class="sp_type">Chemistry</td><td><?php echo get_field('chemistry'); ?></td></tr>
<?php } ?>
<?php if (get_field('removable')) { ?>
<tr><td class="sp_type">Removable</td><td><?php echo get_field('removable'); ?></td></tr>
<?php } ?>
<?php if (get_field('battery_size')) { ?>
<tr><td class="sp_type">Size</td><td><?php echo get_field('battery_size'); ?></td></tr>
<?php } ?>
<?php if (get_field('backup_time')) { ?>
<tr><td class="sp_type">Backup time</td><td><?php echo get_field('backup_time'); ?></td></tr>
<?php } ?>

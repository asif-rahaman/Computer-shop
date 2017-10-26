
<tr><th colspan="2">Storage</th></tr>
<?php if (get_field('drive_type')) { ?>
<tr><td class="sp_type">Drive Type</td><td><?php echo get_field('drive_type'); ?></td></tr>
<?php } ?>
<?php if (get_field('drive_capacity')) { ?>
<tr><td class="sp_type">Drive Capacity</td><td><?php echo get_field('drive_capacity'); ?></td></tr>
<?php } ?>
<?php if (get_field('rpm')) { ?>
<tr><td class="sp_type">RPM</td><td><?php echo get_field('rpm'); ?></td></tr>
<?php } ?>
<?php if (get_field('internal_size')) { ?>
<tr><td class="sp_type">Internal size</td><td><?php echo get_field('internal_size'); ?></td></tr>
<?php } ?>
<?php if (get_field('external_storage')) { ?>
<tr><td class="sp_type">External storage</td><td><?php echo get_field('external_storage'); ?></td></tr>
<?php } ?>
<?php if (get_field('external_storage_support')) { ?>
<tr><td class="sp_type">External storage support</td><td><?php echo get_field('external_storage_support'); ?></td></tr>
<?php } ?>
<?php if (get_field('max_external_size')) { ?>
<tr><td class="sp_type">Max external size</td><td><?php echo get_field('max_external_size'); ?></td></tr>
<?php } ?>
<?php if (get_field('data_transfer_rate')) { ?>
<tr><td class="sp_type">Transfer rate</td><td><?php echo get_field('data_transfer_rate'); ?></td></tr>
<?php } ?>





<tr><th colspan="2">Processor</th></tr>
<?php if (get_field('cpu_brand')) { ?>
<tr><td class="sp_type">CPU Brand</td><td><?php echo get_field('cpu_brand'); ?></td></tr>
<?php } ?>
<?php if (get_field('cpu_family')) { ?>
<tr><td class="sp_type">CPU Family</td><td><?php echo get_field('cpu_family'); ?></td></tr>
<?php } ?>
<?php if (get_field('cpu_model')) { ?>
<tr><td class="sp_type">Model</td><td><?php echo get_field('cpu_model'); ?></td></tr>
<?php } ?>
<?php if (get_field('cpu_cores')) { ?>
<tr><td class="sp_type">Cores</td><td><?php echo get_field('cpu_cores'); ?></td></tr>
<?php } ?>
<?php if (get_field('cpu_clock_speed')) { ?>
<tr><td class="sp_type">Clock Speed</td><td><?php echo get_field('cpu_clock_speed'); ?></td></tr>
<?php } ?>
<?php if (get_field('turbo_clock_speed')) { ?>
<tr><td class="sp_type">Turbo Clock Speed</td><td><?php echo get_field('turbo_clock_speed'); ?></td></tr>
<?php } ?>



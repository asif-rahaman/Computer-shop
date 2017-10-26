<?php if(get_field('print_functions')){ ?>
<tr><th colspan="2">Printer Info</th></tr>
<?php } ?>
<?php if (get_field('print_functions')) { ?>
<tr><td class="sp_type">Functions</td><td><?php echo get_field('print_functions'); ?></td></tr>
<?php } ?>
<?php if (get_field('printer_type')) { ?>
<tr><td class="sp_type">Printer Type</td><td><?php echo get_field('printer_type'); ?></td></tr>
<?php } ?>
<?php if (get_field('speed_ppm_color')) { ?>
<tr><td class="sp_type">Speed PPM Color</td><td><?php echo get_field('speed_ppm_color'); ?></td></tr>
<?php } ?>
<?php if (get_field('print_resolution')) { ?>
<tr><td class="sp_type">Print Resolution</td><td><?php echo get_field('print_resolution'); ?></td></tr>
<?php } ?>
<?php if (get_field('pr_scan_speed')) { ?>
<tr><td class="sp_type">Scan Speed</td><td><?php echo get_field('pr_scan_speed'); ?></td></tr>
<?php } ?>
<?php if (get_field('pr_scan_resolution')) { ?>
<tr><td class="sp_type">Scan Resolution</td><td><?php echo get_field('pr_scan_resolution'); ?></td></tr>
<?php } ?>
<?php if (get_field('pr_copy_speed')) { ?>
<tr><td class="sp_type">Copy Speed</td><td><?php echo get_field('pr_copy_speed'); ?></td></tr>
<?php } ?>
<?php if (get_field('pr_fax_speed')) { ?>
<tr><td class="sp_type">Fax Speed</td><td><?php echo get_field('pr_fax_speed'); ?></td></tr>
<?php } ?>
<?php if (get_field('pr_fax_resolution')) { ?>
<tr><td class="sp_type">Fax Resolution</td><td><?php echo get_field('pr_fax_resolution'); ?></td></tr>
<?php } ?>
<?php if (get_field('print_paper')) { ?>
<tr><td class="sp_type">Paper</td><td><?php echo get_field('print_paper'); ?></td></tr>
<?php } ?>
<?php if (get_field('print_interface')) { ?>
<tr><td class="sp_type">Interface</td><td><?php echo get_field('print_interface'); ?></td></tr>
<?php } ?>
<?php if (get_field('print_memory')) { ?>
<tr><td class="sp_type">Memory</td><td><?php echo get_field('print_memory'); ?></td></tr>
<?php } ?>
<?php if (get_field('os_compatibility')) { ?>
<tr><td class="sp_type">OS Compatibility</td><td><?php echo get_field('os_compatibility'); ?></td></tr>
<?php } ?>


<tr><th colspan="2">Port Options</th></tr>
<?php if (get_field('usb')) { ?>
<tr><td class="sp_type">USB</td><td><?php echo get_field('usb'); ?></td></tr>
<?php } ?>
<?php if (get_field('usb_3')) { ?>
<tr><td class="sp_type">USB 3.0</td><td><?php echo get_field('usb_3'); ?></td></tr>
<?php } ?>
<?php if (get_field('thunderbolt')) { ?>
<tr><td class="sp_type">Thunderbolt</td><td><?php echo get_field('thunderbolt'); ?></td></tr>
<?php } ?>
<?php if (get_field('combo_esata')) { ?>
<tr><td class="sp_type">Combo eSATA / USB</td><td><?php echo get_field('combo_esata'); ?></td></tr>
<?php } ?>
<?php if (get_field('ethernet')) { ?>
<tr><td class="sp_type">Ethernet</td><td><?php echo get_field('ethernet'); ?></td></tr>
<?php } ?>
<?php if (get_field('ethernet_type')) { ?>
<tr><td class="sp_type">Ethernet type</td><td><?php echo get_field('ethernet_type'); ?></td></tr>
<?php } ?>
<?php if (get_field('vga')) { ?>
<tr><td class="sp_type">VGA</td><td><?php echo get_field('vga'); ?></td></tr>
<?php } ?>
<?php if (get_field('hdmi')) { ?>
<tr><td class="sp_type">HDMI</td><td><?php echo get_field('hdmi'); ?></td></tr>
<?php } ?>
<?php if (get_field('3.5mm_headphone')) { ?>
<tr><td class="sp_type">3.5mm Headphone</td><td><?php echo get_field('3.5mm_headphone'); ?></td></tr>
<?php } ?>
<?php if (get_field('3.5mm_line-in')) { ?>
<tr><td class="sp_type">3.5mm line-in / microphone</td><td><?php echo get_field('3.5mm_line-in'); ?></td></tr>
<?php } ?>
<?php if (get_field('headphone')) { ?>
<tr><td class="sp_type">Headphone</td><td><?php echo get_field('headphone'); ?></td></tr>
<?php } ?>
<?php if (get_field('data_connections')) { ?>
<tr><td class="sp_type">Data connections</td><td><?php echo get_field('data_connections'); ?></td></tr>
<?php } ?>
<?php if (get_field('3.5mm_mic_headphone_combo')) { ?>
<tr><td class="sp_type">3.5mm mic / Headphone Combo</td><td><?php echo get_field('3.5mm_mic_headphone_combo'); ?></td></tr>
<?php } ?>
<?php if (get_field('other_ports')) { ?>
<tr><td class="sp_type">Other ports</td><td><?php echo get_field('other_ports'); ?></td></tr>
<?php } ?>







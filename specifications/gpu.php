
<tr><th colspan="2">GPU</th></tr>
<?php if (get_field('graphics_type')) { ?>
<tr><td class="sp_type">Graphics type</td><td><?php echo get_field('graphics_type'); ?></td></tr>
<?php } ?>
<?php if (get_field('gpu_brand')) { ?>
<tr><td class="sp_type">GPU brand</td><td><?php echo get_field('gpu_brand'); ?></td></tr>
<?php } ?>
<?php if (get_field('gpu_model')) { ?>
<tr><td class="sp_type">GPU model</td><td><?php echo get_field('gpu_model'); ?></td></tr>
<?php } ?>
<?php if (get_field('dedicated_vram_size')) { ?>
<tr><td class="sp_type">Dedicated VRAM size</td><td><?php echo get_field('dedicated_vram_size'); ?></td></tr>
<?php } ?>




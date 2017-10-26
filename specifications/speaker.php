<?php if (get_field('rms_channel')||get_field('signal_to_noise_ratio')||get_field('audio_frequency')||get_field('audio_remote_control')) {?>
<tr><th colspan="2">Speaker Info</th></tr>
<?php if (get_field('rms_channel')) { ?>
<tr><td class="sp_type">RMS/Channel</td><td><?php echo get_field('rms_channel'); ?></td></tr>
<?php } ?>
<?php if (get_field('signal_to_noise_ratio')) { ?>
<tr><td class="sp_type">Signal to Noise Ratio</td><td><?php echo get_field('signal_to_noise_ratio'); ?></td></tr>
<?php } ?>
<?php if (get_field('audio_frequency')) { ?>
<tr><td class="sp_type">Frequency</td><td><?php echo get_field('audio_frequency'); ?></td></tr>
<?php } ?>
<?php if (get_field('audio_remote_control')) { ?>
<tr><td class="sp_type">Remote Control</td><td><?php echo get_field('audio_remote_control'); ?></td></tr>
<?php } }?>


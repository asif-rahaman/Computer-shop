<?php

	$product_term= array('laptop','desktop',); 
 	if (has_term( $product_term, 'product_cat' )){ 
		echo '<h2>Detailed Specifications</h2>';
?>
<div class="width3 specification">
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->		
	<table id="list">
		<tbody>
			<tr><th colspan="2">Detail Specification</th></tr>
			<?php if (get_field('brand')) { ?>
			<tr><td class="sp_type">Brand</td><td><?php echo get_field('brand'); ?></td></tr>
			<?php } ?>
			<tr><td class="sp_type">Model</td><td><?php echo get_field('model'); ?></td></tr>
			<tr><td class="sp_type">Processor</td><td><?php echo get_field('processor'); ?></td></tr>
			<tr><td class="sp_type">Clock Rate</td><td><?php echo get_field('clock_rate'); ?></td></tr>
			<tr><td class="sp_type">RAM Type</td><td><?php echo get_field('ram_type'); ?></td></tr>
			<tr><td class="sp_type">RAM</td><td><?php echo get_field('ram'); ?></td></tr>
			<tr><td class="sp_type">HDD</td><td><?php echo get_field('hdd'); ?></td></tr>
			<tr><td class="sp_type">Display Size</td><td><?php echo get_field('display_size'); ?></td></tr>
			<tr><td class="sp_type">Display Type</td><td> <?php echo get_field('brand'); ?> </td></tr>
			<tr><td class="sp_type">Graphics Chipset</td><td><?php echo get_field('brand'); ?> </td></tr>
			<tr><td class="sp_type">Optical Device</td><td><?php echo get_field('brand'); ?></td></tr>
			<tr><td class="sp_type">Network</td><td><?php echo get_field('brand'); ?></td></tr>
			<tr><td class="sp_type">Wifi</td><td><?php echo get_field('brand'); ?></td></tr>
			<tr><td class="sp_type">Bluetooth</td><td><?php echo get_field('brand'); ?></td></tr>
			<tr><td class="sp_type">WebCam</td><td><?php echo get_field('brand'); ?></td></tr>
			<tr><td class="sp_type">Card Reader</td><td><?php echo get_field('brand'); ?></td></tr>
			<tr><td class="sp_type">Backup Time</td><td><?php echo get_field('backup_time'); ?> </td></tr>
			<tr><td class="sp_type">Battery</td><td><?php echo get_field('brand'); ?></td></tr>
			<tr><td class="sp_type">Warranty</td><td><?php echo get_field('warranty'); ?></td></tr>
		</tbody>
	</table>
	<?php } 
	else {
		echo '<h2>Sorry Specifications unavailable.</h2>';
	}

	?>

</div>
<?php 
<?php
/*
*
*This a PHP file which contains all custom PHP functions 
*
*/

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style',100);
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style( 'woo-layout1', get_template_directory_uri().'/css/layout.css');

}
/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function computerstore_style() {
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri().'/css/custom.css');
}

add_action( 'wp_enqueue_scripts', 'computerstore_style',9999 );

//NEW Product TAB

add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
		// Adds the new tab
	
	$tabs['specification_tab'] = array(
		'title' 	=> __( 'Specifications', 'woocommerce' ),
		'priority' 	=> 10,
		'callback' 	=> 'woo_new_product_tab_content'
	);
 
	return $tabs;
 
}
function woo_new_product_tab_content() {
 
 	// The new tab content
/*$product_term= array('laptop','desktop',); 
 if (has_term( $product_term, 'product_cat' )){ 
		echo '<h2>Detailed Specifications</h2>';*/
?>
<div class="width3 specification">
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->	
	<h2>Detailed Specifications</h2>	
	<table id="list">
		<tbody>
<?php 
	include 'specifications/general.php';
	include 'specifications/processor.php';
	include 'specifications/memory.php';
	include 'specifications/display.php';
	include 'specifications/gpu.php';
	include 'specifications/storage.php';
	include 'specifications/camera.php';
	include 'specifications/optical_drive.php';
	include 'specifications/port_options.php';
	include 'specifications/connectivity.php';
	include 'specifications/battery.php';
	include 'specifications/software.php';
	include 'specifications/hardware.php';
	include 'specifications/sensors.php';
	include 'specifications/desktop.php';
	include 'specifications/motherboard.php';
	include 'specifications/printer.php';
	include 'specifications/speaker.php';
	include 'specifications/warranty.php';	
?>
</tbody>
	</table>
	<?php /*} 
	else {
		echo '<h2>Sorry Specifications unavailable.</h2>';
	}*/

	?>

</div>
<?php

} 

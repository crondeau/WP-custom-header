<?php
/**
 * Code snippet that needs to go in your header.php
 * Displays a custom header on all the pages in your theme
 * Works in collaboration with the custom-header.php
 *
 * @package blm_basic
 */
?>	
	
	<!-- if there's a header image, let's display it here 
		 if you don't want to use the header image, just delete lines 46 to 52-->
	<?php $header_image = get_header_image();
	if ( ! empty( $header_image ) ) { ?>

		<a href="<?php echo home_url() ?>/"><img class="hide-for-small" src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" /></a>

	<?php } ?>
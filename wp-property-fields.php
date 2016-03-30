<?php

function amwp_add_custom_metabox() {

	add_meta_box(
		'amwp_tax_meta',
		__( 'Property Listing' ),
		'amwp_property_meta_callback',
		'property',
		'normal',
		'core'
	);

}

add_action( 'add_meta_boxes', 'amwp_add_custom_metabox' );

function amwp_property_meta_callback( $post ) {
?>

<?php }

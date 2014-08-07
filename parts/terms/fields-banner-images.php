<?php
/*
Title: Banner Image
Taxonomy: category
Order: 0
*/

piklist(
	'field', array(
		'type'  => 'file'
	, 'field'   => 'subimg'
	, 'label'   => __( 'Set Banner Image', 'piklist' )
	, 'options' => array(
			'modal_title' => __( 'Set Banner Image', 'piklist' )
		, 'button'        => __( 'Set Banner Image', 'piklist' )
		)
	)
);

?>
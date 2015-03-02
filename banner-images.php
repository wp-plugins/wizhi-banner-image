<?php
/*
Plugin Name:        Wizhi banner images
Plugin URI:         http://www.wpzhiku.com/
Description:        Display diffrent banner images in page and taxonomy terms，为每个页面或分类显示一个banner背景图
Version:            1.0
Author:             Amos Lee
Author URI:         http://www.wpzhiku.com/
License:            MIT License
Plugin Type:        Piklist
License URI:        http://opensource.org/licenses/MIT
Text Domain:        wizhi
*/
?>


<?php

    /**
    * Load translations
    */
    add_action('plugins_loaded', 'wizhi_banner_load_textdomain');
    function wizhi_banner_load_textdomain() {
        load_plugin_textdomain( 'wizhi', false, basename(dirname(__FILE__)) . '/lang/' );
    }


	//get all custom taxonomy
	add_filter('piklist_add_part', 'wizhi_assign_all_public_tax', 10, 2);
	function wizhi_assign_all_public_tax($data, $type){

		// if is not term return it
		if($type != 'terms')
		{
			return $data;
		}
	 
	    $args = array(
	       'public'   => true,
	       '_builtin' => false
	    );
	 
	    $output = 'objects';
	 
	    // get all custom taxonomy
	    $taxonomies = get_taxonomies($args, $output);
	 
	    // get taxonomy names
	    foreach ($taxonomies  as $taxonomy)
	    {
	      $taxonomy_list[] = $taxonomy->name;
	    }
	 
	    // get piklist need`s string
	    $comma_list = implode(', ', $taxonomy_list);

	    //Add the default category
		$comma_list .= ', category';
	 
	    // add all custom taxonomy to piklist
	    $data['taxonomy'] = $comma_list;
	 
	  return $data;
	}


	//Display banner images
	function wizhi_banner_image(){

		if ( is_page() ) {

			global $post;

			$post_id = $post->ID;
			$subimg = get_post_meta($post_id, 'subimg', true);

			if( $subimg ){
				$subimg = $subimg;
			} else {
				$post_id = $post->post_parent;
				$subimg = get_post_meta($post_id, 'subimg', true);
			}

		} elseif( is_single() ){

			//get post_type`s taxonomy
			$post_type = $post->post_type;
			$taxonomies = array_values( get_object_taxonomies( $post_type, 'objects' ) ); #associated array to index array
			$taxonomy = $taxonomies[0]->name;

			//get the first term
			$terms = get_the_terms($post->ID, $taxonomy);
	    	$term_id = $terms[0]->term_id;

			$subimg = get_term_meta( $term_id, 'subimg', true );

		} elseif ( is_tax() || is_category() ){

			$queried_object = get_queried_object();
			$term_id = $queried_object->term_id;

			$subimg = get_term_meta( $term_id, 'subimg', true );

		} else {

			$subimg = null;

		}

		$subimg_src = wp_get_attachment_url( $subimg );

		if ( $subimg_src ) { ?>

			<div class="wizhi-subimg" style="background:url('<?php echo $subimg_src; ?>'); width:100%; height:80px;"></div>

		<?php }

	}
	
?>
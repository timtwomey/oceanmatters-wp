<?php 
// Remove admin bar for all users
show_admin_bar( false );

// Move ACF Options menu under Settings
//if( function_exists('acf_add_options_sub_page') )
//{
//    acf_add_options_sub_page(array(
//        'title' => __( 'Site Options', 'om-emi' ),
//        'parent' => 'options-general.php',
//        'capability' => 'manage_options'
//    ));
//}

// Add TinyMCE buttons that are disabled by default
//function om-emi_mce_buttons_2($buttons) {	
//	/**
//	 * Add in a core button that's disabled by default
//	 */
//	$buttons[] = 'justify'; // fully justify text
//	$buttons[] = 'hr'; // insert HR
//
//	return $buttons;
//}
//add_filter('mce_buttons_2', 'om-emi_mce_buttons_2');


// Remove all colors except those custom colors specified from TinyMCE
//function om-emi_change_mce_options( $init ) {
//	$custom_colors = '"#####1", "Color Name 1", "#####2", "Color Name 2", "#####3", "Color Name 3"';	
//	$init['textcolor_map'] = '['.$custom_colors.']';
//return $init;
//}
//add_filter('tiny_mce_before_init', 'om-emi_change_mce_options');


// Modify the query on a given template (using conditionals)
//function om-emi_custom_query($query) {
//    if ($query->is_search) {
//        $query->set('post_type', 'post');
//    }
//    return $query;
//}
//add_filter('pre_get_posts','om-emi_custom_query');
?>
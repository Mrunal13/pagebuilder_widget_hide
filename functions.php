<?php
/*
 * Pass list of variables using localize script and js will hide that widgets on widgets page.
 */
function mytheme_admin_scripts(){
	$mytheme_pagebuilder_widgets_list = array('Contact Widget','Portfolio Widget'); //List of Widget names
	$mytheme_current_screen = get_current_screen();
	if( $mytheme_current_screen->id == "widgets" ) {
		wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/mytheme.js', array('jquery'));
		wp_localize_script('mytheme-script','mytheme_hide_widgets', array('mytheme_pagebuilder_widgets_list' => $mytheme_pagebuilder_widgets_list) );
	}
}
add_action( 'admin_enqueue_scripts', 'mytheme_admin_scripts' );
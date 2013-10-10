<?php
//Load up our WP Ninja Custom Form JS files.
function ninja_forms_admin_css(){
	$plugin_settings = get_option('ninja_forms_settings');

	wp_enqueue_style( 'jquery-smoothness', NINJA_FORMS_URL .'/css/smoothness/jquery-smoothness.css');
	wp_enqueue_style( 'ninja-forms-admin', NINJA_FORMS_URL .'/css/ninja-forms-admin.css');
	wp_enqueue_style( 'jquery-modal', NINJA_FORMS_URL .'/css/jquery.modal.css');

	add_filter('admin_body_class', 'ninja_forms_add_class');

}

function ninja_forms_font_css() {
	if ( is_admin() ) {
		wp_enqueue_style( 'ninja-forms-fonts', NINJA_FORMS_URL .'/css/fonts.css');
	}
}
add_action( 'admin_init', 'ninja_forms_font_css' );

function ninja_forms_add_class($classes) {
	// add 'class-name' to the $classes array
	$classes .= ' nav-menus-php';
	// return the $classes array
	return $classes;
}

function ninja_forms_admin_js(){
	global $version_compare;

	$plugin_settings = get_option("ninja_forms_settings");
	if(isset($plugin_settings['date_format'])){
		$date_format = $plugin_settings['date_format'];
	}else{
		$date_format = 'm/d/Y';
	}

	$date_format = ninja_forms_date_to_datepicker($date_format);

	wp_enqueue_script('jquery-modal',
	NINJA_FORMS_URL .'/js/min/jquery.modal.min.js',
	array( 'jquery' ) );

	wp_enqueue_script('ninja-forms-admin',
	NINJA_FORMS_URL .'/js/dev/ninja-forms-admin.js',
	array('jquery', 'jquery-ui-core', 'jquery-ui-sortable', 'jquery-ui-datepicker', 'jquery-ui-draggable', 'jquery-ui-droppable' ));

	wp_localize_script( 'ninja-forms-admin', 'ninja_forms_settings', array('date_format' => $date_format));
	/*
	wp_enqueue_script('jquery.ui.nestedSortable',
	NINJA_FORMS_URL .'/js/dev/jquery.ui.nestedSortable.js',
	array('jquery', 'jquery-ui-core', 'jquery-ui-sortable', 'jquery-ui-dialog', 'jquery-ui-datepicker'));
	*/
	//wp_localize_script( 'ninja_forms_admin_js', 'settings', array( 'plugin_url' => NINJA_FORMS_URL, 'help_size' => $plugin_settings['help_size'], 'help_color' => $plugin_settings['help_color'], 'admin_help' => $plugin_settings['admin_help']) );
}
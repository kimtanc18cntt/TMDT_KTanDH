<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
function tbtsolution_remove_widget_new() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'tbtsolution_remove_widget_new' );
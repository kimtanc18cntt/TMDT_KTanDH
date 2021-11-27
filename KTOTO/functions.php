<?php

/* thêm thanh menu */
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu chính' ));
}
add_action( 'init', 'register_my_menu' );

/* Đưa về trình soạn thảo cũ */
add_filter('use_block_editor_for_post', '__return_false');

/* thêm wigget */

if (function_exists('register_sidebar')){
	register_sidebar(array(
	'name'=> 'Cột bên',
	'id' => 'sidebar',
    'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3><p class="title-sidebar"><i class="fas fa-bars"></i>',
        'after_title'   => '</h3>',
	));
}
/* đưa wigget về soạn thảo kiểu cũ cho dễ */
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );


<?php

function theme_setup(){
    register_nav_menu('topmenu',__( 'Menu chính' ));
    add_theme_support( 'post-thumbnails' ); 

    function setpostview($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    function getpostviews($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }



}

add_action('init','theme_setup');


function my_custom_wc_theme_support() {

    add_theme_support( 'woocommerce' );

    add_theme_support( 'wc-product-gallery-lightbox' );

    add_theme_support( 'wc-product-gallery-slider' );

}


add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );

/** 
 @khai bao hang gia tri
 @THEME_URL =  lay duong dan thu muc theme
 @ CORE = lay duong dan cua thu muc core
**/
define('THEME_URL', get_stylesheet_directory() );
define('CORE', THEME_URL ."/core");

/**
 @nhung file /core/init.php
 **/


/**
@Thiet lap chieu rong noi dung 
**/
if (!isset($content_width) ){
    $content_width = 620;
}

/**
 @khai bao chuc nang cua theme
**/ 
if (!function_exists('kimtan_theme_setup')){
    function kimtan_theme_setup(){
        /*thiet lap textdomain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('kimtan','$language_folder');

        /* tu dong them link RSS len <head> */
        add_theme_support('automatic_feed_links');

        /* them post thumbnail*/
        add_theme_support('post-thumbnails') ;

        /* Post Fomat*/
        add_theme_support('post-formats', array(
            'image',
            'Video',
            'gallery',
            'quote',
            'link'
        ) );

        /*Them Title-tag */
        add_theme_support('title-tag');

        /* them custom backgrod */
        $default_backgroud = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-background',$default_backgroud);

        /* them memu */
        register_nav_menu('primary-menu', __('Primary Menu', 'Kimtan'));
        /* them side bar */
        $sidebar = array(
            'name'=> __('Main Sidebar','Kimtan'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' =>'<h3 class="widgettitle">',
            'after_title' =>'</h3>'
        );
        register_sidebar($sidebar);

    }
    add_action('init', 'kimtan_theme_setup');


}
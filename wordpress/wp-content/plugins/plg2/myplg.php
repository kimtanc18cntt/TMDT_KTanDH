<?php
/*
plugin name: my plugin demo
Description: tap viet Plugin
Version: 1.0
Author: Le Kim Tan
*/
if)(!class_exists('My_First_Plugin_Demo')){
    class My_First_Plugin_Demo {
        function __construct() {
            if(!function_exists('add_shortcode')){
                return;
            }
            add_shortcode ( 'hello', array(&$this, 'hello_func') );           

        }
        function hello_func($atts = array(), $content = null){
            extract(shortcode_atts(array('name' => 'World'), $atts));
            return'<div><p>Hello '.$name.'!!!</p></div>';
        }
    }
}
function mfpd_load() {
    global $mfpd;
    $mfpd = new My_First_Plugin_Demo();
}
add_action('Plugin_loaded', 'mfpd_load'); 
?> 
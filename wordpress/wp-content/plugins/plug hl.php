<?php
/*
Plugin Name: hello_plg

Description: Just another contact form plugin. Simple but flexible.
Author: Le Kim Tan

Domain Path: /languages/
Version: 5.5.1
*/
function hello($t){
    if (strpos($t, '2020')==false){
        return $t;
    }
    else{
        return $t.'  hello!!!';
    }
}
add_filter('the_content','hello');
add_filter('the_title','hello');
?>
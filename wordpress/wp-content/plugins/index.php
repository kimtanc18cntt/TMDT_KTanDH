
         <?php
/*
Plugin Name: mykt_plg

Description: Just another contact form plugin. Simple but flexible.
Author: Le Kim Tan

Domain Path: /languages/
Version: 5.5.1
*/
function hello($t){
    $text = 'Rolex';  
		 $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);  
		 echo $text;
}
add_filter('the_content','hello');
add_filter('the_title','hello');
?>
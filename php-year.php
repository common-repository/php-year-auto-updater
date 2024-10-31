<?php
/*
* Plugin Name: PHP Year Auto Updater
* Description: Let's you use the shortcode [php-year] anywhere you need the year to auto update (like in your copyright).
* Version: 1.0
* Author: Richard Nesbitt
* Author URI: http://RichardNesbitt.com
*/

function wp_php_year_shortcode($atts, $content = null){
    //use output buffering to prevent the year from being prepended to the line/div.
    ob_start(); // begin output buffering
    $php_date = date('Y');
    printf( '%s', $php_date );
    $output = ob_get_contents(); // end output buffering
    ob_end_clean(); // grab the buffer contents and empty the buffer
    return $output;
}
add_shortcode('php-year', 'wp_php_year_shortcode');

?>


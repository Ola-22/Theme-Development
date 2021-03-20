<?php
/*
Plugin Name: My First Plugin
Author: Ola Nazly
Plugin URI: http://google.com
Author URI: http://google.com
Version: 1.0
Description: My first plugin for testing
Text Domain: my-plugin
Domain Path: languages
*/

function myplugin_capital_title($title) {
    $filterd = strtoupper(
        $title,
        '', 
    );
    return $filterd;
}

add_filter('the_title', 'myplugin_capital_title');
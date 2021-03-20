<?php
require __DIR__ . '/inc/customize.php';

function mytheme_header_image() {
    echo '<style>
    .ss-facebook a{
        background-image:url(' . get_header_image() . ')
        }
        </style>';
}

add_action('wp_head', 'mytheme_header_image');

function mytheme_after_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [

    ]);
    add_theme_support('post-thumbnails');
    add_image_size('mytheme-thumbnail', 600, 690, true);
    set_post_thumbnail_size(600, 690);

    register_nav_menu('primary', 'Primary Menu');
    register_nav_menu('Footer', 'Footer Menu');
    register_nav_menu('menu', 'Menu Menu');
    add_theme_support('post-formats', array('standard', 'image', 'video', 'gallery', 'chat', 'link', 'aside', 'quote', 'audio'
    ));
}

add_action('after_setup_theme', 'mytheme_after_setup');
function mytheme_enqueue_scripts() {
        wp_enqueue_style(
        'main', // Style ID
        get_theme_file_uri('/assets/css/main.css'), //File URL
        [], //Depends on
        '2' //version
    );
    
    wp_enqueue_style(
        'base', // Style ID
        get_theme_file_uri('/assets/css/base.css'), //File URL
        [], //Depends on
        '2' //version
    );
     wp_enqueue_style(
        'vendor', // Style ID
        get_theme_file_uri('/assets/css/vendor.css'), //File URL
        [], //Depends on
        '2' //version
    );
   wp_enqueue_style(
        'fonts', // ID
        'https://fonts.googleapis.com/css?family=Playfair+Display:700,900', //File URL
        [], //Depends on
        '' //version
    );
    wp_enqueue_script(
        'modernizr', // Style ID
        get_theme_file_uri('/assets/js/modernizr.js'), //File URL
        [], //Depends on
        '', //version
        true //Include In Footer
    );
    wp_enqueue_script(
        'jquery-3-2-1', // ID
        get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), //File URL
        [], //Depends on
        '', //version
        true //Inclde In Footer  //False => in head
    );
    wp_enqueue_script(
        'plugins', // ID
        get_theme_file_uri('/assets/js/plugins.js'), //File URL
        [], //Depends on
        '', //version
        true //Inclde In Footer  //False => in head
    );
    wp_enqueue_script(
        'main', // ID
        get_theme_file_uri('/assets/js/main.js'), //File URL
        [], //Depends on
        '', //version
        true //Inclde In Footer  //False => in head
    );


}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


function mytheme_register_sidebars() {
    register_sidebar([
        'id' => 'left-sidebar',
        'name' => 'Left Sidebar',
        'description' => 'The Main sidebar on the page left'
    ]);
}

add_action('widgets_init', 'mytheme_register_sidebars')

?>
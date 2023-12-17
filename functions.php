<?php 

include(get_template_directory().'/inc/enqueue.php');
add_action('wp_enqueue_scripts', 'nhrepon_resource_calling'); 
//widget code
include(get_template_directory().'/inc/widgets.php');
add_action( 'widgets_init', 'nhrepon_register_sidebars' );


//custom script
function nhrepon_script() {
    wp_enqueue_script(
        'nhrepon_script',
        get_template_directory_uri() . '/assets/js/nhrepon_script.js',
        array('jquery'), wp_get_theme()->get('Version') , 'all' );
}
add_action('wp_enqueue_scripts', 'nhrepon_script');

//Register menu
function nhrepon_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'nhrepon Header Menu', 'nhrepon' ),
            'footer_menu'  => __( 'nhrepon Footer Menu', 'nhrepon' ),
        ) );
    }
add_action( 'after_setup_theme', 'nhrepon_nav_menu' );



add_theme_support( 'infinite-scroll', array(
 'container' => 'content',
 'footer' => 'page',
) );

add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
set_post_thumbnail_size(600,400,false);

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

?>
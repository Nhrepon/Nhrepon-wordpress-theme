<?php 
function nhrepon_resource_calling() {
  wp_enqueue_style( 'Bootstrap ', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , '' , wp_get_theme()->get('Version') , 'all' );
  wp_enqueue_style( 'nhrepon-stylesheet', get_stylesheet_uri() , '' , wp_get_theme()->get('Version') , 'all' );
  


  wp_enqueue_style( 'Google-font','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap' , '' , '' , 'all' );

  wp_enqueue_script('nhrepon_script', get_template_directory_uri() . '/assets/js/nh-script.js', array('jquery'), wp_get_theme()->get('Version') , 'all' );
  wp_enqueue_script('Bootstrap ', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), wp_get_theme()->get('Version') , 'all' );
  
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }  
}
?>
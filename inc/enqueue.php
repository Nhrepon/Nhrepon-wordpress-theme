<?php 
function nhrepon_resource_calling() {
  wp_enqueue_style( 'nhrepon-stylesheet', get_stylesheet_uri() , '' , wp_get_theme()->get('Version') , 'all' );
  wp_enqueue_style( 'Google-font','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap' , '' , '' , 'all' );
  
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }  
}
?>
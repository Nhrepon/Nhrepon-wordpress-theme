<?php 

function nhrepon_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'nhrepon-sidebar-1',
            'name'          => __( 'nhrepon Sidebar 1', 'nhrepon' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="nhrepon-sidebar-1" class="widget">',
            'after_widget'  => '</div>'
        )
    );
    register_sidebar(
        array(
            'id'            => 'nhrepon-sidebar-2',
            'name'          => __( 'nhrepon Sidebar 2', 'nhrepon'  ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="nhrepon-sidebar-2" class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );
	register_sidebar(
        array(
            'id'            => 'nhrepon-sidebar-3',
            'name'          => __( 'nhrepon Sidebar 3', 'nhrepon'  ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="nhrepon-sidebar-3" class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );
	register_sidebar(
        array(
            'id'            => 'nhrepon-sidebar-4',
            'name'          => __( 'nhrepon Sidebar 4', 'nhrepon'  ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="nhrepon-sidebar-4" class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );	
/*footer widgets*/
	register_sidebar(
        array(
            'id'            => 'nhrepon-footer-1',
            'name'          => __( 'nhrepon Footer 1', 'nhrepon'  ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="nhrepon-footer-1" class="footer-widget">',
            'after_widget'  => '</div>',

        )
    );	
	
    /* Repeat register_sidebar() code for additional sidebars. */
}
?>
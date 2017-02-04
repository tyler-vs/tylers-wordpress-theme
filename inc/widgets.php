<?php
/**
 * widgets
 *
 * this file includes widgets and sidebars to be added to this particular
 * theme, and may not work with other themes.
 */

if ( ! function_exists( 'tvs_widgets_init' ) ) {

/**
 * tvs_widgets_init
 *
 * registers siderbars/widgetized areas
 * a sidebar in wordpress is considered any area that is widgetized,
 * or has the ability to display widgets.
 *
 * see: https://developer.wordpress.org/themes/functionality/sidebars/
 */

$primary_sidebar_args = array(
    'id'            => 'primary',
    'name'          => __( 'Primary Sidebar' ),
    'description'   => 'Primary sidebar',
    'class'         => 'primary-sidebar',
    'before_widget' => '<div id="%1" class="sidebar-module %2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
);

register_sidebar( $primary_sidebar_args );


$tvs_header_sidebar = array(
    'id'            => 'header-sidebar',
    'name'          => __( 'Header Sidebar' ),
    'description'   => 'Header sidebar',
    'class'         => 'header-sidebar',
    'before_widget' => '<div id="%1" class="sidebar-module %2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
);

register_sidebar( $tvs_header_sidebar );
} // end function exists check


if ( ! function_exists( 'tvs_register_nav_menus' ) ) {
/**
 * register navigation menus
 *
 * overview:
 * allows customizable menus within a theme.
 *
 * usage:
 * 1. register navigations menus using `register_nav_menus()` function
 * 2. display the menu in the appropriate location in your theme using
 *    `wp_nav_menu` template tag in a template file/partial.
 *
 * note:
 * notice the similarities between creating a navigation menu and
 * creating a widgetized area/sidebar.
 *
 */
register_nav_menus(
    array(
        'header-menu' => __( 'Header Menu', 'tvs' ),
        'footer-menu' => __( 'Footer Menu', 'tvs' )
    )
);
}
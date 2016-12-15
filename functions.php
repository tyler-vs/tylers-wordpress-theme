<?php
/**
 * functions.php
 *
 * added theme functionalities
 *
 */


/**
 * setup theme defaults and WordPress supports
 */
if ( ! function_exists('theme_setup') ) {
    function theme_setup() {

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        // custom template tags
        // require( get_template_directory() . 'inc/template-tags.php' );

        // enqueue theme styles and scripts
        add_action('wp_enqueue_scripts', 'tvs_add_theme_scripts');

        // add theme menus
        add_action( 'init', 'tvs_register_theme_menus');

        // add widgetized area aka 'sidebars'
        add_action( 'widgets_init', 'tvs_widgets_init' );

    }
}
add_action( 'after_setup_theme', 'theme_setup' );


/**
 * theme styles and scripts
 */
if ( ! function_exists('tvs_add_theme_scripts') ) {
    function tvs_add_theme_scripts() {

        // theme's style.css ( required )
        wp_enqueue_style( 'style-css', get_stylesheet_uri() );

        // google fonts
        // wp_enqueue_style( 'open-sans-css', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,600,700' );

        // bootstrap css
        wp_enqueue_style(
            'bootstrap-css',
            get_template_directory_uri() . '/css/bootstrap.min.css',
            array(),
            '1.0'
        );

        // bootstrap theme css
        wp_enqueue_style(
            'bootstrap-theme-css',
            get_template_directory_uri() . '/css/bootstrap-theme.min.css',
            array( 'bootstrap-css' ),
            '1.0'
        );

        // blog styles
        wp_enqueue_style(
            'blog-css',
            get_template_directory_uri() . '/css/blog.css',
            array(
                'bootstrap-css',
                'bootstrap-theme-css',
            ),
            '1.0'
        );

        // main styles
        wp_enqueue_style(
            'main-css',
            get_template_directory_uri() . '/css/main.css',
            array(
                'bootstrap-css',
                'bootstrap-theme-css',
                'blog-css',
            ),
            '1.0'
        );

        // bootstrap script
        wp_enqueue_style( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );

    }
}


/**
 * add viewport meta
 */
if ( ! function_exists('add_viewport_meta') ) {
    function add_viewport_meta() { ?>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
<?php
    }
}


/**
 * register menus
 */
if ( ! function_exists('tvs_register_theme_menus') ) {
    function tvs_register_theme_menus() {
        register_nav_menus( array(
            'main-menu'      => __('primary'),
            )
        );
    }
}


/**
 * tvs_widgets_init
 *
 * registers siderbars/widgetized areas
 * a sidebar in wordpress is considered any area that is widgetized,
 * or has the ability to display widgets.
 *
 * see: https://developer.wordpress.org/themes/functionality/sidebars/
 */
if ( ! function_exists( 'tvs_widgets_init' ) ) {

        $primary_sidebar_args = array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => 'Primary sidebar',
            'class'         => 'primary-sidebar',
            'before_widget' => '<div id="%1" class="sidebar-module %2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="sidebar-module-title">',
            'after_title'   => '</h4>'
        );

        register_sidebar( $primary_sidebar_args );


        // left-side footer sidebar
        // left_footer_sidebar_args = array(
        //     'name'          => __( 'Left Footer Sidebar', 'tvs' ),
        //     'id'            => 'footer-sidebar',
        //     'description'   => 'Sidebar that appears in the left side of the footer area.',
        //     'class'         => 'sidebar footer-sidebar',
        //     'before_widget' => '<li id="%1" class="widget %2">',
        //     'after_widget'  => '</li>',
        //     'before_title'  => '<h2 class="widget-title">',
        //     'after_title'   => '</h2>'
        // );

        // register_sidebars( left_footer_sidebar_args );
        // register_sidebars( 2, array( 'name' => 'Footer Sidebar %d' ) );

}

?>
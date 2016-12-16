<?php
/**
 * functions.php
 *
 * added theme functionalities
 *
 */

// $custom_text_domain = 'tvs';


/**
 * setup theme defaults and WordPress supports
 */
if ( ! function_exists('theme_setup') ) {
    function theme_setup() {
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    // load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


    /* HTML5 */
    add_theme_support( 'html5',
        array(
            'search-form',
            'caption'
        )
    );

    /**
     *
     */
    // add_theme_support( 'title-tag' );

    /**
     * Register two custom navigation menus.
     */
    /*register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
        'secondary' => __('Secondary Menu', 'myfirsttheme' )
    ) );*/
    add_action( 'init', 'tvs_register_nav_menus');

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    /*add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );*/

    // custom template tags
    // require( get_template_directory() . 'inc/template-tags.php' );

    /**
     * Enqueue theme styles and scripts.
     */
    add_action('wp_enqueue_scripts', 'tvs_add_theme_scripts');

    /**
     * Register widgetized area aka 'sidebars'.
     */
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


        /**
         * Theme Scripts
         */

        // modernizer script
        wp_enqueue_script(
            'modernizr-script',
            get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
            array(),
            '1.0',
            false
        );

        // bootstrap script
        wp_enqueue_script(
            'bootstrap-script',
            get_template_directory_uri() . '/js/vendor/bootstrap.min.js',
            array( 'jquery' ),
            '1.0',
            true
        );

        // bootstrap script
        wp_enqueue_script(
            'plugins-script',
            get_template_directory_uri() . '/js/plugins.js',
            array( 'jquery', 'bootstrap-script' ),
            '1.0',
            true
        );

        // main script
        wp_enqueue_script(
            'main-script',
            get_template_directory_uri() . '/js/main.js',
            array( 'jquery', 'bootstrap-script', 'plugins-script' ),
            '1.0',
            true
        );
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
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    );

    register_sidebar( $primary_sidebar_args );
}


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
if ( ! function_exists( 'tvs_register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu', 'tvs' ),
            'footer-menu' => __( 'Footer Menu', 'tvs' )
        )
    );
}

?>
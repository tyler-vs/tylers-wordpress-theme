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
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

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
        // wp_enqueue_style(
        //     'main-css',
        //     get_template_directory_uri() . '/css/main.css',
        //     array(
        //         'bootstrap-css',
        //         'bootstrap-theme-css',
        //         'blog-css',
        //     ),
        //     '1.0'
        // );


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
 * Extras ( misc. )
 */
include( get_stylesheet_uri() . 'inc/extras.php' );


/**
 * Widgets ( and sidebars )
 */
include( get_stylesheet_uri() . 'inc/widgets.php' );


/**
 * Customizer
 */
// include( get_stylesheet_uri() . 'inc/customizer.php' );



/*class Post {
  function get_excerpt( $content ) {
    if( strlen($content) < 250  ) {
      return $content;
    }
    else {
      $excerpt = substr( $content, 0, 250 );
      return $excerpt . '...';
    }
  }

  function the_excerpt( $content ) {
    echo get_excerpt( $content );
  }

  function the_title( $title ) {
    echo $title;
  }
}*/
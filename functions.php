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
if ( ! function_exists('tvs_theme_setup') ) {
    function tvs_theme_setup() {

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

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
add_action( 'after_setup_theme', 'tvs_theme_setup' );


/**
 * theme styles and scripts
 */
if ( ! function_exists('tvs_add_theme_scripts') ) {
    function tvs_add_theme_scripts() {

        // theme's style.css ( required )
        wp_enqueue_style( 'style-css', get_stylesheet_uri() );

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

/**
 * Theme Hooks
 */

/*
Can't link to without breaking... do not know why???
include( get_stylesheet_uri() . 'inc/action_hooks.php' );
include( get_stylesheet_uri() . 'inc/filter_hooks.php' );*/

// container hooks
function tvs_container_before(){  do_action('tvs_container_before');  }
function tvs_container_after(){  do_action('tvs_container_after');  }

function tvs_page_heading() {

    if ( is_home() || is_front_page() ) {
    ?>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h2><?php echo apply_filters( 'tvs_page_heading_title', 'Lastest Articles' ); ?></h2>
            </div><!-- /.page-header -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <?php
    } // end if statement
}
add_action( 'tvs_container_before', 'tvs_page_heading' );


// sample function for ammending a filter
function change_page_heading_title( $c ) {
    $new_content = $c . ':';
    return $new_content;
}
add_filter( 'tvs_page_heading_title', 'change_page_heading_title' );



if ( ! function_exists( 'tvs_footer_colophone' ) ) {
    function tvs_footer_colophone() { ?>
        <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>. Running on <a href="https://wordpress.org/" title="WordPress">WordPress <?php bloginfo('version'); ?></a>. &copy; Copyrighted <?php echo apply_filters( 'tvs_colophone_copyright_date', date( 'Y' ) ); ?></p>
    <p><a href="#">Back to top</a></p>
    <?php
    }
} // end if


// demo of using filters to override the default filter
function change_footer_date() {
    $new_date = '2014 - ' . date( 'Y' ) . '.';
    return $new_date;
}

add_filter( 'tvs_colophone_copyright_date', 'change_footer_date' );


// tvs_footer_colophone() { do_action('tvs_footer_colophone'); }
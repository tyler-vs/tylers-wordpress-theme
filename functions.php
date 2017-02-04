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


/*html head*/

function tvs_singlular_description_meta( $c ) {
    if ( is_singular() ) {
        // get the page description and output it here...
        // $new_content = ;
        return $c;
    }
}
add_filter( 'tvs_description_meta', 'tvs_singlular_description_meta' );


/**
 * Header Hooks
 */

// before header
if ( ! function_exists( 'tvs_before_header' ) ) {
    function tvs_before_header(){ do_action('tvs_before_header'); }
}

// header
function tvs_header() { ?>
<div class="container">
    <div class="row">
        <div class="<?php echo apply_filters( 'tvs_blog_header_classes', esc_attr( 'blog-header col-sm-8' ) ); ?>">
        <?php
        if ( is_front_page() || is_home() ) { ?>
            <h1 class="blog-title h3"><a href="<?php bloginfo('url') ?>" title="<?php echo esc_attr( apply_filters('tvs_blog_header_title', ucwords( get_bloginfo('title') ) ) ); ?>"><?php echo apply_filters('tvs_blog_header_title', ucwords( get_bloginfo('title') ) ); ?></a></h1><!-- /.blog-title -->
        <?php } else {   ?>
            <p class="blog-title h3"><a href="<?php bloginfo('url') ?>" title="<?php echo esc_attr( apply_filters('tvs_blog_header_title', ucwords( get_bloginfo('title') ) ) ); ?>"><?php echo apply_filters('tvs_blog_header_title', ucwords( get_bloginfo('title') ) ); ?></a></p><!-- /.blog-title -->
        <?php } ?>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
        </div><!-- /.blog-header -->
        <?php tvs_blog_header_right_side(); ?>
    </div><!-- /.row -->
</div><!-- /.container -->
<?php
}

if ( ! function_exists( 'tvs_blog_header_right_side();' ) ) {
/**
 * [tvs_blog_header_right_side description]
 * @return [type] [description]
 */
function tvs_blog_header_right_side() { ?>
    <aside class="blog-header-aside col-sm-4">
        <?php if ( ! is_active_sidebar( 'header-sidebar' ) ): ?>
            <p>You can add a widget here!</p>
        <?php else:
            dynamic_sidebar( 'header-sidebar' );
              endif; ?>
    </aside>
<?php
}
}

if ( ! function_exists('tvs_primary_nav') ) {
/**
 * [tvs_primary_nav description]
 * @return [type] [description]
 */
function tvs_primary_nav() { ?>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#"></a> -->
        </div><!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
           /**
            * Displays a navigation menu
            * @param array $args Arguments
            */
            $tvs_header_nav_menu_args = array(
                'theme_location' => 'header-menu',
                'container' => null,
                'menu_class' => 'nav navbar-nav',
                'menu_id' => '',
                'fallback_cb' => 'wp_page_menu',
                'before' => null,
                'after' => null,
                'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
            );

            // WP function to display menu that
            // was defined with array of arguments
            wp_nav_menu( $tvs_header_nav_menu_args );
         ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
</nav><!-- /.navbar navbar-default -->
<?php
}
}

// after header

if (! function_exists( 'tvs_after_header' ) ) {
    function tvs_after_header(){ do_action('tvs_after_header'); }
}



/**
 * container hooks
 */
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


/**
 * Footer Hooks
 */

function tvs_before_footer(){ do_action( 'tvs_before_footer' ); }
function tvs_after_footer(){ do_action( 'tvs_after_footer' ); }

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

<?php
/**
 * header.php
 *
 * template partial
 */
 ?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('title'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php do_action( 'tvs_before_masthead' ); ?>
        <header class="blog-masthead">
            <div class="container">
                <div class="blog-header">
                    <?php
                    // show the site site as an h1 on the home page
                    // and as a p on other pages.
                    if ( is_front_page() || is_home() ) { ?>
                        <h1 class="blog-title h3"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo( 'title' ); ?>"><?php bloginfo('title') ?></a></h1><!-- /.blog-title -->
                    <?php } else {   ?>
                        <p class="blog-title h3"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo( 'title' ); ?>"><?php bloginfo('title') ?></a></p><!-- /.blog-title -->
                    <?php } ?>
                    <p class="lead blog-description"><?php bloginfo('description'); ?></p>
                </div><!-- /.blog-header -->
            </div><!-- /.container -->
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
                                // 'container_class' => 'blog-nav',
                                // menu represents the ul element
                                'menu_class' => 'nav navbar-nav',
                                // this will output a default that uses the name
                                // of the registered menu, which could be useful
                                // or more likely unnecessary.
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
            </nav>
        </header> <!-- /.blog-masthead -->
        <?php do_action( 'tvs_after_masthead' ); ?>

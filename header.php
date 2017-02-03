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
        <?php do_action( 'tvs_before_header' ); ?>
        <div class="blog-masthead">
          <div class="container">
            <?php
               /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $tvs_header_nav_menu_args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'site-nav',
                    // menu represents the ul element
                    'menu_class' => 'nav nav-pills',
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
          </div> <!-- /.container -->
        </div> <!-- /.blog-masthead -->
        <div class="container">
            <div class="blog-header">
                <?php

                if ( is_front_page() || is_home() ) {

                    /**
                     * tvs blog title filter
                     */

                    echo apply_filters( 'tvs_blog_title', '
                <h1 class="blog-title">
                    <a href="' . get_bloginfo('url') .'" title="' . get_bloginfo('title') . '">' . get_bloginfo('title') . '</a>
                </h1>');

                    /**
                     * tvs blog description filter
                     */

                    echo apply_filters( 'tvs_blog_description', '
                <p class="lead blog-description">' . get_bloginfo('description') . '</p>' );

                } else {

                    ?>
                    <header class="blog-post-header">
                        <h2 class="blog-post-title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h2> <!-- /.blog-post-title -->
                        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author_link(); ?></p>
                    </header>
                <?php

                }


                 ?>
            </div> <!-- /.blog-header -->
        </div> <!-- /.container -->
        <?php do_action( 'tvs_after_header' ); ?>
        <div class="container">
<?php
/**
 * header.php
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
        <div class="blog-masthead">
          <div class="container">
            <?php
               /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $tvs_header_nav_menu_args = array(
                    'theme_location' => 'header-menu',
                    'menu' => '',
                    'container' => 'nav',
                    'container_class' => 'site-nav',
                    'container_id' => '',
                    // menu represents the ul element
                    'menu_class' => 'nav nav-pills',
                    // this will output a default that uses the name
                    // of the registered menu, which could be useful
                    // or more likely unnecessary.
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => null,
                    'after' => null,
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    // 'items_wrap' => '%3$s',
                    'depth' => 0,
                    'walker' => ''
                );

                wp_nav_menu( $tvs_header_nav_menu_args );

             ?>
          </div>
        </div>

        <div class="jumbotron">
            <div class="container">
                <div class="blog-header">
                    <h1 class="blog-title">
                        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a>
                    </h1>
                    <p class="lead blog-description"><?php bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
        <div class="container">

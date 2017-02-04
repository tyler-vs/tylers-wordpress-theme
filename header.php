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
<meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo apply_filters( 'tvs_site_title_tag', ucwords( get_bloginfo('title') ) ); ?></title>
<meta name="description" content="<?php echo apply_filters( 'tvs_description_meta', esc_attr( bloginfo('description') ) ); ?>">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_attr( bloginfo( 'pingback_url' ) ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php tvs_before_header(); ?>
<header class="blog-masthead">
    <?php tvs_header(); ?>
    <?php tvs_primary_nav(); ?>
</header> <!-- /.blog-masthead -->
<?php tvs_after_header(); ?>
<?php tvs_container_before(); ?>
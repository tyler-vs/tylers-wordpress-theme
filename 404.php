<?php
/**
 * 404.php
 *
 * The 404 template is used when WordPress cannot find a post, page, or other
 * content that matches the visitor’s request.
 */
 ?>
<?php get_header(); ?>
<div class="<?php echo apply_filter( 'tvs_main_container_class', 'container' ); ?>">
  <div class="row">
    <main class="col-sm-8 blog-main" role="main">
        <?php echo apply_filters( 'tvs_404_page_title', esc_html('<h1>Page Not Found</h1>') );  ?>
        <?php echo apply_filters( 'tvs_404_page_content', esc_html('<p>Sorry, but the page you were trying to view does not exist.</p>') ) ?>
    </main><!-- /.blog-main -->
    <?php get_sidebar(); ?>
  </div><!-- /.row -->
</div><!-- /.container -->
<?php get_footer(); ?>
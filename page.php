<?php
/**
 * page.php
 *
 * The page template is used when visitors request individual pages, which are
 * a built-in template.
 */
 ?>
<?php get_header(); ?>
<div class="container">
  <div class="row">

    <div class="col-sm-8 blog-main">

        <?php
          // get the default loop
          get_template_part( 'loop', 'page' );
         ?>

    </div><!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
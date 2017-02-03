<?php
/**
 * index.php
 *
 * the default template file used by wordpress if no other files exist.
 *
 */
 ?>
<?php get_header(); ?>

          <div class="row">

            <div class="col-sm-8 blog-main">

            <?php
                do_action('tvs_before_loop');
                // get the default loop
                get_template_part( 'loop' );

                do_action('tvs_after_loop');
             ?>

            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>

          </div><!-- /.row -->

        </div><!-- /.container -->

<?php get_footer(); ?>
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
                  // get the default loop
                  get_template_part( 'loop' );
                 ?>

            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>

          </div><!-- /.row -->

        </div><!-- /.container -->

<?php get_footer(); ?>
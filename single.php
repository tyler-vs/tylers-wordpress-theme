<?php
/**
 * single.php
 *
 * The single post template is used when a visitor requests a single post.
 * For this, and all other query templates, index.php is used if the
 * query template is not present. - WP Codex
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
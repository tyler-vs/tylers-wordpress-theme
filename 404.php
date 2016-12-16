<?php
/**
 * 404.php
 *
 * The 404 template is used when WordPress cannot find a post, page, or other
 * content that matches the visitor’s request.
 */
 ?>
<?php get_header(); ?>

          <div class="row">

            <div class="col-sm-8 blog-main">

                <h2>Page Not Found</h2>
                <p>Sorry, but the page you were trying to view does not exist.</p>

            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>

          </div><!-- /.row -->

        </div><!-- /.container -->

<?php get_footer(); ?>
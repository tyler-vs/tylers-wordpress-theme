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

                if (have_posts() ) {

                    while ( have_posts() ) {

                        the_post();

                        // get default content template
                        get_template_part( 'template-parts/content' );

                    }

                } else {
                    // get the template for no content
                    get_template_part( 'template-parts/content', 'none' );
                } ?>
              <nav>
                <ul class="pager">
                  <li><a href="#">Previous</a></li>
                  <li><a href="#">Next</a></li>
                </ul>
              </nav>

            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>

          </div><!-- /.row -->

        </div><!-- /.container -->

<?php get_footer(); ?>
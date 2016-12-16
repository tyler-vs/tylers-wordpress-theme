<?php
/**
 * archive.php
 *
 *
 */
 ?>
<?php get_header(); ?>

        <div class="row">
            <div class="col-sm-12">
                <?php $title = $wp_query->get_queried_object(); ?>
                <h1>
                    <?php
                    echo 'Archive for <em>';
                    // echo out correct title depending on archive type
                    if ( is_day() ) {
                        echo the_time('F jS, Y');
                    }
                    elseif ( is_month() ) {
                        echo the_time('F Y');
                    }
                    elseif ( is_year() ) {
                        echo the_time('Y');
                    }
                    else {
                        echo $title->name;
                    }
                    echo '</em>';
                    ?>
                </h1>
                <hr>
            </div>
        </div>

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
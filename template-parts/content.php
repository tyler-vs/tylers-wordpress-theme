<?php
/**
 * content.php
 *
 * most basic post format.
 *
 */
 ?>

<div class="blog-post">
    <header class="blog-post-header">
        <h2 class="blog-post-title">
            <?php
            /**
             * if :on either the blog home page or a define static front
             * page then add a link to the article/blog post.
             * else:
             * just display the title of the blog post without the anchor tag.*/

            if ( is_front_page() || is_home() ) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <?php } else { ?>
                <?php the_title(); ?>
            <?php } ?>
        </h2> <!-- /.blog-post-title -->
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
    </header>
    <div class="blog-post-content">
        <?php
        /**
         * determine whether to output the post content as
         * the full content or an excerpt
         */

        if ( is_singular() ) {
            the_content();
        } else {
            the_excerpt();
        }
        ?>

    </div>
    <hr>
    <footer class="blog-post-footer">
        <!-- meta goes here -->
    </footer>
  </div><!-- /.blog-post -->
<?php
/**
 * loop-single.php
 *
 * this idea was found from Rachel McCollins and the purpose is to
 * have a tempalte file to house the loop(s) used on a wordpress site
 * to make it easier to modify the loop instead of going through each
 * template file and doing so.
 */

if (have_posts() ) {

    while ( have_posts() ) {

        the_post();

        ?>
        <div <?php post_class( 'blog-post' ); ?> id="<?php the_ID(); ?>">
            <header class="blog-post-header">
                <h1 class="blog-post-title"><?php the_title(); ?></h1> <!-- /.blog-post-title -->
                <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author_link(); ?></p>
            </header>
            <div class="blog-post-content">
                <?php the_content(); ?>
            </div>
            <hr>
            <footer class="blog-post-footer">
                <!-- meta goes here -->
            </footer>
          </div><!-- /.blog-post -->
        <?php

    }

} else {

    // get the template for no content
    get_template_part( 'template-parts/content', 'none' );

}
 ?>

<nav>
    <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</nav>
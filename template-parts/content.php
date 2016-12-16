<?php
/**
 * content.php
 *
 * most basic post format.
 *
 */
 ?>

<div <?php post_class( 'blog-post' ); ?> id="post-<?php the_ID(); ?>">
    <header class="blog-post-header">
        <h2 class="blog-post-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2> <!-- /.blog-post-title -->
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author_link(); ?></p>
    </header>
    <div class="blog-post-content">
        <?php the_excerpt(); ?>
    </div> <!-- /.blog-post-content -->
</div><!-- /.blog-post -->
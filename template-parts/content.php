<?php
/**
 * content.php
 *
 * most basic post format.
 *
 */
 ?>

<article <?php post_class( 'blog-post' ); ?> id="post-<?php the_ID(); ?>">
    <?php if ( is_single() ): ?>
    <section class="blog-post-content">
        <?php the_content(); ?>
    </section> <!-- /.blog-post-content -->
    <?php else: ?>
    <header>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </header>
    <section class="blog-post-content">
        <?php the_excerpt(); ?>
    </section> <!-- /.blog-post-content -->
    <?php endif ?>
</article><!-- /.blog-post -->
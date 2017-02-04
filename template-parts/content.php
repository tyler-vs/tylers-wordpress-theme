<?php
/**
 * content.php
 *
 * most basic post format.
 *
 */
 ?>
<?php do_action( 'tvs_before_article' ); ?>
<article <?php post_class( 'blog-post' ); ?> id="post-<?php the_ID(); ?>">
    <header class="blog-post-header">
        <?php if ( is_singular() ) { ?>
            <h1 class="blog-post-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>
        <?php } ?>
    </header><!-- /.blog-post-header -->
    <section class="blog-post-content">
        <?php if ( is_singular() ) {
            the_content();
            } else {
                the_excerpt();
            }
         ?>
    </section> <!-- /.blog-post-content -->
</article><!-- /.blog-post -->
<?php do_action( 'tvs_after_article' ); ?>
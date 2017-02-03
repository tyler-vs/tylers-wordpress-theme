<?php
/**
 * content.php
 *
 * most basic post format.
 *
 */
 ?>

<div <?php post_class( 'blog-post' ); ?> id="post-<?php the_ID(); ?>">
    <div class="blog-post-content">
        <?php the_excerpt(); ?>
    </div> <!-- /.blog-post-content -->
</div><!-- /.blog-post -->
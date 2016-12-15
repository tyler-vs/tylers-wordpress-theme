<?php
/**
 * sidebar.php
 *
 * A sidebar is any widgetized area of your theme. Widget areas are
 * places in your theme where users can add their own widgets. You do not
 * need to include a sidebar in your theme, but including a sidebar means
 * users can add content to the widget areas through the Customizer or the
 * Widgets Admin Panel.
 */
 ?>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php dynamic_sidebar( 'primary' ); ?>
</div><!-- /.blog-sidebar -->
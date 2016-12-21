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
<?php do_action( 'tvs_before_sidebar' ); ?>
<aside class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php
    /**
     * if there are no active widgets then display a search widget,
     * archive widget and a "meta" widget which displays login, signup and
     * a RSS feed.
     */
    if ( ! is_active_sidebar( 'primary' ) ) {
        // do_action('tvs_after_sidebar_inner');
        ?>
        <div class="sidebar-module">
            <h4>Info</h4>
            <p>This is a default sidebar, please go the <em>Customizer</em> or <em>Widgets Admin Panel</em> to add actual widgets.</p>
        </div>
        <div class="sidebar-module">
            <h4>About</h4>
            <?php
            bloginfo('description');
            // get_search_form(); ?>
        </div>
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ol>
        </div>
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">Github</a></li>
                <li><a href="#">Github</a></li>
                <li><a href="#">Github</a></li>
            </ol>
        </div>
        <?php
        do_action('tvs_after_sidebar_inner');
    } else {
        dynamic_sidebar( 'primary' );
    } ?>
</aside><!-- /.blog-sidebar -->
<?php do_action( 'tvs_after_sidebar' ); ?>
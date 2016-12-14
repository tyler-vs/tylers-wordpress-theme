<?php
/**
 * loop.php
 *
 * this idea was found from Rachel McCollins and the purpose is to
 * have a tempalte file to house the loop(s) used on a wordpress site
 * to make it easier to modify the loop instead of going through each
 * template file and doing so.
 *
 */

if (have_posts() ) {

    while ( have_posts() ) {

        the_post();

        // get default content template
        get_template_part( 'template-parts/content' );

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
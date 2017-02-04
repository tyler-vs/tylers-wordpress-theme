<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 */

/**
 * Remove profanities (demo of a WP fitler hook)
 */

add_filter( 'the_content', 'tvs_profanity_filter' );

function tvs_profanity_filter( $content ) {
    $profanities = array(
        'sissy',
        'dummy',
        'idiot',
        'asshole'
        );

    // replace dirty words with `[censor]` placeholder
    $content = str_replace( $profanities, '[censor]', $content );
    // str_replace uses a needle in the haystack method, where,
    // we pass the needle, the array of words to find,
    // the haystack, the context in which to look for the needle

    return $content;
}

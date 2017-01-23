<?php
/**
 * extras
 *
 * contains extra codes, theme functionalities
 *
 */

/**
 * add viewport meta
 */
if ( ! function_exists('add_viewport_meta') ) {
    function add_viewport_meta() { ?>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
<?php
    }
}
<?php
/**
 * customizer for wp theme
 *
 * this file contains customizer options that are centered for this
 * particular wordpress theme and may not with other themes.
 *
 */


// check to see if this function already exists or not
if ( ! function_exists( 'tvs_customizer_register' ) ) {

    function tvs_customizer_register( $wp_customize ) {

        /**
         * Sections
         */

        // footer copyright section
        $wp_customize->add_section( 'tvs_footer_copyright', array(
            'title'     =>      __( 'Footer Copyright', 'tvs' )
        ) );

        // footer copyright setting
        $wp_customize->add_setting( 'tvs_footer_copyright_setting', array(
            'default'   =>      __( 'Blog template built for Bootstrap by @mdo.

' , 'tvs' )
        ) );

        // footer copyright control
        // $wp_customize->add_control() {

        }

    }
}

add_action( 'customize_register', 'tvs_theme_customizer' );


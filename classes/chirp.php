<?php
/**
 * Chirp
 *
 * OOP Demo
 *
 */


class Chirp {

    // variables

    var $text;
    var $length;
    var $hashtag_base;
    var $hashtags;
    var $chirp;

    function __construct( $text ) {

        $this->text = $text;
        $this->hashtag_base = 'http://chirp.chip/hashtags/';

        $this->set_length();
        $this->set_hashtags();
        $this->set_chirp();
    }

    /**
     * define's the length of the chirp
     * setter function, despite is being a simple function, because it
     * is wrapped in a function instead of being hardcoded, the '200'
     * value can be modified later.
     */
    /*function set_length() {
        $this->length = 200;
    }*/

    function set_length() {
        $this->length = 200;
    }

    /**
     * desc.
     */
    function set_hashtags() {
        preg_match_all( "/S*#((?:\[[^\]]+\]|\S+))/" , $this->text, $matches);
        $hashtags = array();
        foreach ( $matches[1] as $key => $match ) {
            $hashtags[ '#' . $match ] = '<a href="http://www.chirp.chip/hashtags/' . $match . '/">#' . $match . '</a>';
        }

        $this->hashtags = $hashtags;
    }


    /**
     * desc.
     */
    function get_chirp() {
        $chirp = substr( $this->text, 0, $this->length );
        $chirp = str_replace( array_keys( $this->hashtags ), array_values( $this->hashtags ), $chirp);
        $this->chirp = $chirp;
    }


} // end of Chirp class


// example of using the actual chirp class
// note we pass in a string value, notice how the __constructor method
// has a placeholder to accept a parameter value.
$chirp = new Chirp( 'This is a chirp with an #example hashtag created with code that is #procedural' );
echo $chirp->get_chirp;


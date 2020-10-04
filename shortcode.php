<?php
/*
* Plugin Name: WordPress Plugin YouTube Embed
* Description: Shortcode to embed GDPR compliant YouTube player
* Version: 1.0
* Author: Rob Saum
* Author URI: https://www.robsaum.com
*/


function youtube_emebed_function( $atts, $content = null ) {
    return '<iframe src="https://www.youtube-nocookie.com/embed/'. $content .'?modestbranding=1&#038;rel=0&#038;showinfo=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe>';
}

add_shortcode('yt', 'youtube_emebed_function');

?>
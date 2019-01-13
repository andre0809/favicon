<?php
/**
/**
Plugin Name: Favicon
Plugin URI: --
Description:Plugin test
Version: 0.01
Author URI: --
*/
function ch2fi_page_header_output() {

    $site_icon_url = get_site_icon_url();
	if ( !empty( $site_icon_url ) ) {
        wp_site_icon();
    } else {
        $icon_url = plugins_url( 'favicon.ico', __FILE__ );
    ?>
    <link rel="shortcut icon" href="<?php echo $icon_url; ?>" />
    <?php }

}
add_action( 'wp_head', 'ch2fi_page_header_output' );
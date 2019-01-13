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
    <link rel="shortcut icon" href="<?php echo $icon_url; ?>" />  /** add icon link to url 
    <?php }

}
function showmenu(){
        add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'favipage' );
}
function favipage(){
        echo "<h2>Favicon Upload</h2>";
}
add_action( 'wp_head', 'ch2fi_page_header_output' );
add_action('admin_menu', 'showmenu');

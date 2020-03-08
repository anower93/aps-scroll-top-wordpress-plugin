<?php

/*

Plugin Name: APS Scroll Top

Plugin URI: http://nirapodhost.com/contact-us/

Author: Anwar Hossain Abid

Author URI: http://nirapodhost.com

Description: This is Fully free and It will always be free. We will update this plugin regularly. 


Version: 1.0.0


*/



add_action('wp_head', 'amader_deshta_sopnopuri');

function amader_deshta_sopnopuri(){ ?>
	

	<div class="amader-designta-sopnopuri">
		
		<a href="#"><i class="fas fa-angle-up"></i></a>

	</div>


<?php

}


add_action('wp_enqueue_scripts', 'plugin_style_functions');
function plugin_style_functions(){
	wp_enqueue_style('amader-shopnopuri-font-awesome', PLUGINS_URL('css/all.min.css',__FILE__));
	wp_enqueue_style('amader-min-font-awesome', PLUGINS_URL('css/fontawesome.min.css',__FILE__));
	wp_enqueue_style('amader-shopnopuri-custom-style', PLUGINS_URL('css/custom.css',__FILE__));

	wp_enqueue_script('amader-font-js', PLUGINS_URL('scripts/fontawesome.min.js', __FILE__),array('jquery'), '', true);
	wp_enqueue_script('amader-shopnopuri-js', PLUGINS_URL('scripts/all.min.js', __FILE__),array('jquery'), '', true);
	wp_enqueue_script('amader-custom-js', PLUGINS_URL('scripts/custom.js', __FILE__),array('jquery'), '', false);

}
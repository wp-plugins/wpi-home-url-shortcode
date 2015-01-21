<?php
/**
 * Plugin Name: WPi Home Url Shortcode
 * Plugin URI: http://wooprali.prali.in/plugins/wpi-pricelist-shortcode
 * Description: Use home_url in any post using shortcode [wpi_home_url]
 * Version: 1.0.0
 * Author: wooprali
 * Author URI: http://wooprali.in
 * Text Domain: wooprali
 * Domain Path: /locale/
 * Network: true
 * License: GPL2
 */
defined('ABSPATH') or die("No script kiddies please!");
if ( !defined('WPIHU_URL' ) ) {
	define( 'WPIHU_URL', plugin_dir_url( __FILE__ ) ); 
}
class WPiHomeUrlShortcode{
	public function __construct(){	
		add_shortcode("wpi_home_url", array($this, "wpi_home_url"));
	}
	public function wpi_home_url($atts, $content=""){
		$default=array(	"path"=>"");
		$atts=shortcode_atts($default, $atts, "wpi_home_url");
		return home_url($atts['path']);
	}
}
$wpi_home_url_shortcode=new WPiHomeUrlShortcode;
?>
<?php
/**
 * Plugin Name: Frog WP
 * Plugin URI:  https://github.com/rilwis/frog-wp
 * Description: A simple way to debug
 * Version:     1.0.0
 * Author:      Anh Tran
 * Author URI:  https://deluxeblogtips.com
 * License:     GPL2+
 * Text Domain: frog-wp
 * Domain Path: /languages/
 */

defined( 'ABSPATH' ) || die;

require __DIR__ . '/vendor/autoload.php';

use FrogWP\Factory;
use Riimu\Kit\PHPEncoder\PHPEncoder;

function f( ...$variables ) {
	try {
		// Try sending data to Frog socket server.
		$output = wp_json_encode( $variables );
		Factory::make()->binary( $output );
	} catch( Exception $e ) {
		// Log to default logger as a fallback. Make data formatted.
		$encoder = new PHPEncoder;
		$output  = [];
		foreach ( $variables as $variable ) {
			$output[] = $encoder->encode( $variable );
		}
		$output = "\n\n" . implode( "\n\n", $output ) . "\n";
		error_log( $output );
	}
}

Factory::shutdown();
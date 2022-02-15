<?php
/**
 * Plugin Name: Frog
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

use WebSocket\Client;

function f( ...$variables ) {
	$message = json_encode( $variables );

	$client = new Client( 'ws://127.0.0.1:1503' );
	$client->binary( $message );
	$client->close();
}
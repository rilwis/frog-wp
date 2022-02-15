<?php
namespace FrogWP;

use WebSocket\Client;

class Factory {
	private static $client;

	public static function make() {
		if ( ! self::$client ) {
			self::$client = new Client( 'ws://127.0.0.1:1503' );
		}

		return self::$client;
	}

	public static function shutdown() {
		register_shutdown_function( [ __CLASS__, 'clear' ] );
	}

	public static function clear() {
		if ( self::$client ) {
			self::$client->close();
		}
	}
}
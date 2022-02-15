=== Frog WP ===
Contributors: rilwis
Donate link: https://paypal.me/rilwis
Tags: debug, debugging, error, log, logging, development
Requires at least: 4.3
Requires PHP: 5.6
Tested up to: 5.9
Stable tag: 1.0.0
License: GPLv2 or later

Easily debug in WordPress with Frog

== Description ==

[Frog](https://github.com/rilwis/frog) is an utility for developers to debug easier in PHP.

Most developers use `print_r`, `var_dump` and `var_export` for debugging. However, they either output directly in your app which might affects the front end or interrupt the process when using with `die`. It's even harder to debug when you work with Ajax or API.

Until Frog!

Frog creates a socket that always listen to debug requests and show the information about the variables it receives. It doesn't interrupt your process or output anything in your app. Instead it outputs data in the terminal and (optional) browser.

This is a WordPress plugin that sends debug data to Frog.

### Features

- Simple
- Supports syntax highligting when viewing the data from the browser
- Supports viewing debug data in the terminal
- Fallback to default error logging when the Frog socket server is not available

### Usage

```
// Log a simple variable.
f( 'Hello world' );
f( $var );

// Log multiple variables at once.
f( 'A string', 123, null, false, '', [], 0, ['one' => 'two', 'three' => 'four'] );
f( $var1, $var2 );
```

== Installation ==

1. [Install Frog](https://github.com/rilwis/frog) and start the Frog socket server.
2. Install Frog plugin from the WordPress dashboard.

== Frequently Asked Questions ==

== Changelog ==

= 1.0.0 - 2022-02-15 =

- First version

== Upgrade Notice ==

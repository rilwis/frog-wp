# Frog - A new way to debug in WordPress

This is a WordPress plugin that sends debug data to [Frog](https://github.com/rilwis/frog).

You need to install Frog first. Please see the Frog repo for installation instruction.

## Installation

Clone this repo

```
git clone https://github.com/rilwis/frog-wp.git
```

Install PHP dependencies

```
composer install
```

Activate this plugin in WordPress.

## Usage

```php
f( $var );

// Multiple variables at once.
f( $var1, $var2 );
```

Then see the Frog terminal and/or browser to see the debug info.
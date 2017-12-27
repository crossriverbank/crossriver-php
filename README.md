# Crossriver Client

[![CircleCI](https://circleci.com/gh/crossriverbank/crossriver-php.svg?style=svg)](https://circleci.com/gh/crossriverbank/crossriver-php)

## Requirements

PHP 5.4 and later.

## Issues

Please use appropriately tagged github [issues](https://github.com/Crossriver/crossriver-php/issues) to request features or report bugs.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require crossriverbank/crossriver-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Getting Started

```php
require('/path/to/Crossriver/Settings.php');
require('/path/to/Crossriver/Bootstrap.php');

use \Crossriver\Settings;
use \Crossriver\Bootstrap;

Settings::configure([
    "root_url" => "https://api.sandbox.crb.finixpayments.com",
    "username" => "USq8mEqvcj1h5oKACLxBaR5N",
    "password" => "18288a65-3fec-481f-8cad-e924a31a0347"
]);

Bootstrap::init();
```

See the [tests](https://github.com/Crossriver/crossriver-php/tree/master/tests) for more details.

### Running tests

`./vendor/bin/phpunit`

See `circle.yml` for more details.

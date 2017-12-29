<?php

require(__DIR__ . '/src/Crossriver/Settings.php');
require(__DIR__ . '/tests/Crossriver/Fixtures.php');
require(__DIR__ . '/src/Crossriver/Bootstrap.php');

use \Crossriver\Tests\Fixtures;
use \Crossriver\Settings;
use \Crossriver\Bootstrap;

$processing_url = getenv("PROCESSING_URL");
if ($processing_url == null) {
    $processing_url =  "https://api.sandbox.crb.finixpayments.com";
}

Fixtures::$apiUrl = $processing_url;

Settings::configure([
    "root_url" => Fixtures::$apiUrl
]);

Bootstrap::init();

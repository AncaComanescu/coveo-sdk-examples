<?php

require_once __DIR__ . '/vendor/autoload.php';

use Coveo\Search\SDK\SDKPushPHP\Enum;
use Coveo\Search\SDK\SDKPushPHP\Constants;

# The below example show that the Enum class is not being loaded.
class ExampleEnum extends Enum {
  const EAMPLE_CONSTANT = 'Hello World!!!';
}
echo 'ExampleEnum::EAMPLE_CONSTANT' . PHP_EOL;
echo ExampleEnum::EAMPLE_CONSTANT;

# The below example show that the Constants class is not being loaded.
echo '\Coveo\Search\SDK\SDKPushPHP\Constants::DATE_FORMAT_STRING' . PHP_EOL;
echo \Coveo\Search\SDK\SDKPushPHP\Constants::DATE_FORMAT_STRING . PHP_EOL;

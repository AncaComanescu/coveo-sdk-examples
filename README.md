# Issue

Unable to get composer to autoload `Coveo\Search\SDK\SDKPushPHP`

It seems that `Coveo\Search\SDK\SDKPushPHP` the namespace is not being autoloaded.

# Examples/Tests

```
# Below file outputs 'yyyy-MM-dd HH:mm:ss'
php example-require.php

# Below file throws 
# 'Uncaught Error: Class 'Coveo\Search\SDK\SDKPushPHP\Constants' not found'
php example-composer.php
```

# Notes
The examples in `coveo/sdkpushphp/examples` are working because of the 
require statements.  The `use` are possibly being ignored because PHP is not 
triggering autoloading because the classes already exist via the require 
statements.
@see <https://www.php.net/manual/en/language.oop5.autoload.php>

Adding the below code to /composer.json and the executing 
`composer dump-autoload -o` does update /vendor/composer/autoload_psr4.php,
adds the mapping to composer's autoloading.

```
"autoload": {
    "psr-4": {
        "Coveo\\Search\\SDK\\SDKPushPHP\\": "vendor/coveo/sdkpushphp/coveopush"
    }
}
```

@see [PSR4 Autoloading your PHP files using Composer](https://thewebtier.com/php/psr4-autoloading-php-files-using-composer/)

# Possible solutions

Maybe the below statement needs to be added to /vendor/coveo/sdkpushphp/composer.json

```
  "autoload": {
      "psr-4": {
          "Coveo\\Search\\SDK\\SDKPushPHP\\": "sdkpushphp/coveopush"
      }
  }
```

Also the file names in `sdkpushphp/coveopush` might to match the namespaces 
and classes.

```
coveo/sdkpushphp/coveopush/CoveoConstants.php => coveo/sdkpushphp/coveopush/Constants.php
```

[![Build Status](https://api.travis-ci.org/AdamB7586/UK_Counties.png)](https://api.travis-ci.org/AdamB7586/UK_Counties)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/AdamB7586/UK_Counties/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/AdamB7586/UK_Counties/)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.3-8892BF.svg?style=flat-circle)](https://php.net/)
[![Scrutinizer Coverage](https://scrutinizer-ci.com/g/AdamB7586/UK_Counties/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/AdamB7586/UK_Counties/)

# UK Counties PHP

Product a list of UK counties using PHP. Can be used to store county ID's rather than names.

## Installation

Installation is available via [Composer/Packagist](https://packagist.org/packages/adamb/database), you can add the following line to your `composer.json` file:

```json
"adamb/uk-counties": "^1.0"
```

or

```sh
composer require adamb/uk-counties
```

## License

This software is distributed under the [MIT](https://github.com/AdamB7586/pdo-dbal/blob/master/LICENSE) license. Please read LICENSE for information on the
software availability and distribution.

## Usage

### List Counties
```php
<?php

use UKCounties\Counties;

print_r(Counties::getCounties()); // Returns array of counties e.g. array(1 => 'Bedfordshire', 2 => 'Berkshire', 3 => 'Bristol', etc, etc, etc)

// To list the counties in alphabetical order you can use getCountiesByName() instead of getCounties()
print_r(Counties::getCountiesByName()); // Returns same as above but in alphabetical order

```

### Get County ID By Name
This can be used to store a unique county ID in a database rather than duplicating information.
```php
<?php

use UKCounties\Counties;

echo(Counties::getCountyID('West Yorkshire')); // Returns 46

echo(Counties::getCountyID('Aberdeenshire')); // Returns 60

```

### Get County Name By ID
```php
<?php

use UKCounties\Counties;

echo(Counties::getCountyName(46)); // Returns "West Yorkshire"

echo(Counties::getCountyName(60)); // Returns "Aberdeenshire"

```
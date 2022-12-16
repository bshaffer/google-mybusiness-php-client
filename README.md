![](https://github.com/googleapis/google-api-php-client/workflows/.github/workflows/tests.yml/badge.svg)

# Google MyBusiness Client Library for PHP #

**IMPORTANT**: This is a fork of the [Google API PHP Client][https://github.com/googleapis/google-api-php-client],
but with support for a previous (and currently deprecated) API with existing non-deprecated endpoints.
See https://github.com/googleapis/google-api-php-client-services/issues/580

## Installation ##

### Composer

You can install via [composer](https://getcomposer.org/). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require bshaffer/apiclient-mybusiness
```

Be sure to include the autoloader:

```php
require_once '/path/to/your-project/vendor/autoload.php';
```

## Examples

Here is an example of how to use the MyBusiness API:

```php
require 'vendor/autoload.php';

$client = new Google\Client();
$mybusiness = new Google_Service_MyBusiness($client);
$parent = 'accounts/{YOUR_ACCOUNT}/locations/{YOUR_LOCATION}';
$response = $mybusiness->accounts_locations_reviews->listAccountsLocationsReviews($parent);
```

See the [google-api-php-client](https://github.com/googleapis/google-api-php-client) repo for more
usage instructions.

#### Cleaning up unused services

There are over 200 Google API services. See
[the google-api-php-client README](https://github.com/googleapis/google-api-php-client#cleaning-up-unused-services)
for how to clean them up.

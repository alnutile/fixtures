# Fixture Getter and Setter for API or DTO testing

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alnutile/fixtures.svg?style=flat-square)](https://packagist.org/packages/alnutile/fixtures)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alnutile/fixtures/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alnutile/fixtures/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alnutile/fixtures/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alnutile/fixtures/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alnutile/fixtures.svg?style=flat-square)](https://packagist.org/packages/alnutile/fixtures)

## TL;DR
For writing tests and mocking Http responses using files saved in my `tests/fixtures` folder. Yes some people hit the real 
API and this has it's place but when working with APIs it is nice and faster not to hit the API for a lot of reasons.

![](logo.png)


## Overview

For all my projects that talk to APIs I will save copies of the API results to my tests folder and use that data to test against.

For example if I GET "https://foo.com/api/bar" and get back:

```json
{
    "baz": "boo"
}
```

Then I save that as a file to my `tests/fixtures/foo_get_response.json`

Then in my test I will mock it with Http or other tool

```php 
$data = get_fixture('foo_get_response.json')
Http::fake(
    [
        'foo.com/*' => Http::response($data, 200)
    ]
);
```

Before I had this helper I would have to write this all out:

```php 
$data = File::get(base_path(sprintf(
            'tests/fixtures/%s',
            $file_name
        )));

$data = json_decode($results, true);
```



## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/fixtures.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/fixtures)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require alnutile/fixtures
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="fixtures-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="fixtures-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="fixtures-views"
```

## Usage

```php
$fixtures = new Alnutile\Fixtures();
echo $fixtures->echoPhrase('Hello, Alnutile!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alfred Nutile](https://github.com/alnutile)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

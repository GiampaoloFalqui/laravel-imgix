# Laravel Imgix

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Requirements

Make sure all dependencies have been installed before moving on:

* [PHP](http://php.net/manual/en/install.php) >= 5.6
* [Composer](https://getcomposer.org/download/)

## Install

Install via Composer:

``` bash
$ composer require nasyrov/laravel-imgix
```

Register the service provider in `config/app.php`:

``` php
'providers' => [
    ...
    Nasyrov\Laravel\Imgix\ImgixServiceProvider::class,
    ...
]
```

Register the facade in `config/app.php`:

``` php
'aliases' => [
    ...
    'Imgix' =>  Nasyrov\Laravel\Imgix\Facades\Imgix::class,
    ...
]
```

Publish the config:

``` bash
php artisan vendor:publish --tag=imgix
```

## Usage

### Facade

``` php
Imgix::createUrl(string $path, array $params = []) : string
```

`$path` The path to the image
`$params` The image parameters

``` php
echo Imgix::createUrl('test.jpg', ['w' => 100, 'h' => 100]);

// Prints out:
// http://test.imgix.net/test.jpg?w=100&h=100
```

### Helper

``` php
imgix(string $path, array $params = []) : string
```

`$path` The path to the image
`$params` The image parameters

``` php
echo imgix('test.jpg', ['w' => 100, 'h' => 100]);

// Prints out:
// http://test.imgix.net/test.jpg?w=100&h=100
```

## Testing

``` bash
$ composer lint
$ composer test
```

## Security

If you discover any security related issues, please email inasyrov@ya.ru instead of using the issue tracker.

## Credits

- [Evgenii Nasyrov][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/nasyrov/laravel-imgix.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/nasyrov/laravel-imgix/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/nasyrov/laravel-imgix.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/nasyrov/laravel-imgix.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/nasyrov/laravel-imgix.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/nasyrov/laravel-imgix
[link-travis]: https://travis-ci.org/nasyrov/laravel-imgix
[link-scrutinizer]: https://scrutinizer-ci.com/g/nasyrov/laravel-imgix/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/nasyrov/laravel-imgix
[link-downloads]: https://packagist.org/packages/nasyrov/laravel-imgix
[link-author]: https://github.com/nasyrov
[link-contributors]: ../../contributors

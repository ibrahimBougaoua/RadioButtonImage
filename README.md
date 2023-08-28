# Radio button image

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibrahimbougaoua/radiobuttonimage.svg?style=flat-square)](https://packagist.org/packages/ibrahimbougaoua/radiobuttonimage)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibrahimbougaoua/radiobuttonimage/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ibrahimbougaoua/radiobuttonimage/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ibrahimbougaoua/radiobuttonimage.svg?style=flat-square)](https://packagist.org/packages/ibrahimbougaoua/radiobuttonimage)

Radio button image is all about replacing traditional radio buttons with images.

<a href="https://www.youtube.com/watch?v=mJDevP77sY4" target="_blank">Youtube Video</a>
<br /><br />
[<img src="https://raw.githubusercontent.com/ibrahimBougaoua/screenshot/main/images/ibrahim-bougaoua-radio-image.jpg" width="100%" class="filament-hidden">](https://www.youtube.com/watch?v=mJDevP77sY4)

## Installation

You can install the package via composer:

```bash
composer require ibrahimbougaoua/radiobuttonimage
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="radiobuttonimage-config"
```

This is the contents of the published config file:

```php
return [
    'path' => asset('storage'),
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="radiobuttonimage-views"
```

## Usage

```php
RadioButtonImage::make('template_id')
->label('Templates')
->options(
	Template::all()->pluck('image', 'id')->toArray()
)
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ibrahim](https://github.com/ibrahimBougaoua)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

# Blade Iranian Brands Icons Template

<a href="https://github.com/rezadindar/blade-iranian-brands-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/rezadindar/blade-iranian-brands-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/mrdindar/blade-iranian-brands-icons">
    <img src="https://img.shields.io/packagist/v/mrdindar/blade-iranian-brands-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/mrdindar/blade-iranian-brands-icons">
    <img src="https://img.shields.io/packagist/dt/mrdindar/blade-iranian-brands-icons" alt="Total Downloads">
</a>

A package to easily make use of [Iranian Brands Icons](https://github.com/rezadindar/blade-iranian-brands-icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg).

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require mrdindar/blade-iranian-brands-icons
```

## Blade Icons

Blade Iranian Brands Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Iranian Brands Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-iranian-brands-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-iranian-brands-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-irbrands-enamad/>
```

You can also pass classes to your icon components:

```blade
<x-irbrands-enamad class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-irbrands-enamad style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-iranian-brands-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-iranian-brands-icons/enamad.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Iranian Brands Icons is developed and maintained by Blade Developer.

## License

Blade Iranian Brands Icons is open-sourced software licensed under [the MIT license](LICENSE.md).

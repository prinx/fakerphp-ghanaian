# Faker - Ghanaian extensions - Work In Progress

>This extension is still in development.

[![Packagist Downloads](https://img.shields.io/packagist/dm/FakerPHP/Ghanaian)](https://packagist.org/packages/fakerphp/Ghanaian)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/FakerPHP/Ghanaian/Continuous%20Integration/main)](https://github.com/FakerPHP/Ghanaian/actions)

Ghanaian specific extensions for Faker

## Getting Started

### Installation

```shell
composer require fakerphp/Ghanaian
```

### Documentation

Full documentation can be found over on [fakerphp.github.io](https://fakerphp.github.io).

### Basic Usage

Use `Faker\Ghanaian\Factory::sweden()` to create and initialize a faker generator with Ghanaian extensions.

```php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Ghanaian\Factory::sweden();

echo $faker->name();
// 'Åke Svensson';
```

## License

Faker is released under the MIT License. See [`LICENSE`](LICENSE) for details.

# Laravel Harvest API

This library is intended to be used within Laravel. It is an interface to the Harvest API.

## Authentication

This library uses the _Personal Access Token_ to authenticate with Harvest.

[Harvest Authentication](https://help.getharvest.com/api-v2/authentication-api/authentication/authentication/)

## Installation

You can install the package via composer:

```bash
composer require actuallyconnor/laravel-harvest-api
```

### Configuration

#### Publish config file

```shell
php artisan vendor:publish
```

#### Add items to `.env` file

```dotenv
HARVEST_ACCESS_TOKEN={your-access-token}
HARVEST_ACCOUNT_ID={your-account-id}
HARVEST_USER_AGENT={your-user-agent}
```

### Service Provider

Add service provider to `config/app.php`

```
\ActuallyConnor\LaravelHarvestAPI\Providers\HarvestServiceProvider::class,
```

## Usage

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Connor Smyth](https://github.com/ActuallyConnor)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

# Saloon SDK for Github

```bash
composer require opblaasmaatje/github-saloon
```

```php
return [
    'base-url' => env('GITHUB_BASE_URL', 'https://api.github.com'),
];
```


## Usage

```php
use Opblaasmaatje\Github\Facades\Github;

Github::users()->getUser('Opblaasmaatje');
```

## Testing

```bash
composer test
```

## Credits

- [Opblaasmaatje](https://github.com/)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

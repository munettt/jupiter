## Jupiter Panel package for Laravel 5.3

### Install

```bash
composer require munettt/jupiter
```

Add service provider into /config/app.php
```php
Munettt\Jupiter\Providers\JupiterServiceProvider::class,
```

Publish files
```bash
php artisan vendor:publish --provider="Munettt\Jupiter\Providers\JupiterServiceProvider"
```

View your dashboard at
```bash
http://YOURSITE/dashboard
```

This is only a sample. Feel free to do as you wish with it.
# demo-sdk-for-Laravel5.5

一个Laravel5.5的扩展包示例

## Installation

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require omgzui/omgzui
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

### Laravel 5.5+:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
\OMGZui\OMGZui\OMGZuiServiceProvider::class
```

If you want to use the facade to log messages, add this to your facades in app.php:

```php
'OMGZui' => \OMGZui\OMGZui\Facades\OMGZui::class,
```

Copy the package config to your local config with the publish command:

```shell
php artisan vendor:publish --provider="\OMGZui\OMGZui\OMGZuiServiceProvider"
```

### Lumen:

For Lumen, register a different Provider in `bootstrap/app.php`:

```php
$app->register(\OMGZui\OMGZui\Facades\OMGZui::class);

```

To change the configuration, copy the file to your config folder and enable it:

```php
$app->configure('omgzui');
```

## Usage

```php
OMGZui::getName(); //小粽子
```

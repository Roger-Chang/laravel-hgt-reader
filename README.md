# laravel-hgt-reader


### Installation For Laravel
Require this package with Composer

```bash
$ composer require sleepcat/laravel-hgt-reader
```

## for laravel
your config/app.php
```php
'providers' => [
    SleepCat\LaravelHgtReader\ReaderServiceProvider::class,
]
```

Add the facade to your `config/app.php` file:

```php

    'aliases'       => array(

        //...
        'HgtReader' => SleepCat\LaravelHgtReader\Facades\HgtReader::class,

    ),

```
## Usage

### Laravel usage
```php

    use HgtReader;

    // Set Hgt files path in /storage
    HgtReader::init($hgtPath, 3);
    
    // Get elevation
    $el = HgtReader::getElevation($lat, $lon);
```

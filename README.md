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
    $hgtPath = "/hgt";
    HgtReader::init($hgtPath, 3);
    
    // Get elevation
    $el = HgtReader::getElevation($lat, $lon);
```
## Download htg files
[Here](http://www.viewfinderpanoramas.org/Coverage%20map%20viewfinderpanoramas_org3.htm)

Download xxx.hgt to `storage/hgt`

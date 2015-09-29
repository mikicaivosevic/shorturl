# shorturl
PHP Package - Turns a long URL into a much shorter one.

###Usage
```php
use ShortUrl\UrlService;
UrlService::create('http://www.example.com');
```

## Installing ShortUrl

The recommended way to install Guzzle is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of ShortUrl:

```bash
composer.phar require mikica/shorturl
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

You can then later update ShortUrl using composer:

 ```bash
composer.phar update
 ```

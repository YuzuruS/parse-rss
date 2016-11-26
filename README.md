This PHP library can easily parse xml files, especially RSS1.0, RSS2.0 and ATOM.
=============================

[![Coverage Status](https://coveralls.io/repos/github/YuzuruS/parse-rss/badge.svg?branch=master)](https://coveralls.io/github/YuzuruS/parse-rss?branch=master)
[![Build Status](https://travis-ci.org/YuzuruS/parse-rss.png?branch=master)](https://travis-ci.org/YuzuruS/parse-rss)
[![Stable Version](https://poser.pugx.org/yuzuru-s/parse-rss/v/stable)](https://packagist.org/packages/yuzuru-s/parse-rss)
[![Download Count](https://poser.pugx.org/yuzuru-s/parse-rss/downloads.png)](https://packagist.org/packages/yuzuru-s/parse-rss)
[![License](https://poser.pugx.org/yuzuru-s/parse-rss/license)](https://packagist.org/packages/yuzuru-s/parse-rss)

Requirements
-----------------------------
- PHP
  - >=5.5 >=5.6, >=7.0
- ext-xml
- Composer



Installation
----------------------------

* Using composer

```
{
    "require": {
       "yuzuru-s/parse-rss": "1.0.*"
    }
}
```

```
$ php composer.phar update yuzuru-s/parse-rss --dev
```

How to use
----------------------------
Please check [sample code](https://github.com/YuzuruS/parse-rss/blob/master/sample/usecase.php)

```php
<?php
require __DIR__ . '/../vendor/autoload.php';
use YuzuruS\Rss\Feed;

$url = 'http://blog.livedoor.jp/dqnplus/index.rdf';
$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
$feed = new Feed();
$res = $feed->load($url, $ua);

var_dump($res);

```

OUTPUT
----------------------------

```

```


How to run unit test
----------------------------

Run with default setting.
```
% vendor/bin/phpunit -c phpunit.xml.dist
```

Currently tested with PHP 7.0.0


History
----------------------------




License
----------------------------
Copyright (c) 2016 YUZURU SUZUKI. See MIT-LICENSE for further details.

Copyright
-----------------------------
- Yuzuru Suzuki
  - http://yuzurus.hatenablog.jp/

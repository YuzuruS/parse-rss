This PHP library can easily parse xml files, especially RSS1.0, RSS2.0 and ATOM.
=============================

[![Coverage Status](https://coveralls.io/repos/github/YuzuruS/parse-rss/badge.svg?branch=master)](https://coveralls.io/github/YuzuruS/parse-rss?branch=master)
[![Build Status](https://travis-ci.org/YuzuruS/parse-rss.png?branch=master)](https://travis-ci.org/YuzuruS/parse-rss)
[![Stable Version](https://poser.pugx.org/yuzuru-s/parse-rss/v/stable)](https://packagist.org/packages/yuzuru-s/parse-rss)
[![Download Count](https://poser.pugx.org/yuzuru-s/parse-rss/downloads.png)](https://packagist.org/packages/yuzuru-s/parse-rss)
[![License](https://poser.pugx.org/yuzuru-s/parse-rss/license)](https://packagist.org/packages/yuzuru-s/parse-rss)

This parser can handle RSS easily without being conscious of the difference of RSS1.0 and RSS2.0 and ATOM.
and gets the minimum necessary value.

1. site name
2. site url
3. article title
4. article url
5. article description
6. date that article posted
7. thumbnail of article

This thumbnail is composed by og:img and img tags included description.

Requirements
-----------------------------
- PHP
  - >=5.5 >=5.6, >=7.0
- ext-xml
- ext-curl
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
$res = Feed::load($url, $ua, true);

echo 'Title:' . $res['channel']['title'] . "\n";
echo 'Link:' . $res['channel']['link'] . "\n";

foreach ($res['item'] as $r) {
	echo "\t" . 'Article Title:' . $r['title'] . "\n";
	echo "\t" . 'Article Description:' . $r['description'] . "\n";
	echo "\t" . 'Article Date:' . $r['date'] . "\n";
	echo "\t" . 'Article og:img:' . $r['image']['ogimg'] . "\n";
	foreach ($r['image']['img'] as $i) {
		echo "\t\t" . 'Desc:img:' . $i . "\n";
	}
}

```

OUTPUT
----------------------------

```
array(2) {
  'channel' =>
  array(2) {
    'title' =>
    string(27) "site name"
    'link' =>
    string "site url"
  }
  'item' =>
  array(15) {
    [0] =>
    array(5) {
      'title' =>
      string "title"
      'link' =>
      string"url"
      'date' =>
      string "date"
      'description' =>
      string "description"
      'image' =>
      array(2) {
        'ogimg' =>
        string(58) "img url"
        'img' =>
        array(3) {
          [0] =>
          string(58) "img url1"
          [1] =>
          string(58) "img url2"
          [2] =>
          string(94) "img url3"
        }
      }
    }
    [1] =>
    array(5) {
...

```

You can also enable caching:

```php
Feed::$cacheDir = __DIR__ . '/tmp';
Feed::$cacheExpire = '5 hours';
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
- 1.0.1
  - Bug fix
- 1.0.0
  - Published


License
----------------------------
Copyright (c) 2016 YUZURU SUZUKI. See MIT-LICENSE for further details.

Copyright
-----------------------------
- Yuzuru Suzuki
  - http://yuzurus.hatenablog.jp/

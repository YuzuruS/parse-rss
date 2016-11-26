<?php
require __DIR__ . '/../vendor/autoload.php';
use YuzuruS\Rss\Feed;

$url = 'http://blog.livedoor.jp/dqnplus/index.rdf';
$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
$feed = new Feed();
$res = $feed->load($url, $ua);

var_dump($res);

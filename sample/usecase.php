<?php
require __DIR__ . '/../vendor/autoload.php';
use YuzuruS\Rss\Feed;

$url = 'http://blog.livedoor.jp/dqnplus/index.rdf';
$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
$res = Feed::load($url, $ua);

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

<?php
require __DIR__ . '/../vendor/autoload.php';
/**
 * FeedTest
 *
 * @version $id$
 * @copyright Yuzuru Suzuki
 * @author Yuzuru Suzuki <navitima@gmail.com>
 * @license PHP Version 3.0 {@link http://www.php.net/license/3_0.txt}
 */
use YuzuruS\Rss\Feed;
class PostTest extends \PHPUnit_Framework_TestCase
{

	public function testFeedRdf()
	{
		$url = 'http://blog.livedoor.jp/dqnplus/index.rdf';
		$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
		$feed = new Feed();
		$res = $feed->load($url, $ua, 'user', 'pass');
		$this->assertTrue(!empty($res));
	}

	public function testFeedRdfCache()
	{
		$url = 'http://blog.livedoor.jp/dqnplus/index.rdf';
		$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
		$feed = new Feed();
		$feed::$cacheDir = '.';
		$res = $feed->load($url, $ua, 'user', 'pass');
		$this->assertTrue(!empty($res));

		$url = 'http://blog.livedoor.jp/dqnplus/index.rdf';
		$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
		$feed = new Feed();
		$feed::$cacheDir = '.';
		$res = $feed->load($url, $ua, 'user', 'pass');
		$this->assertTrue(!empty($res));
	}

	public function testFeedRss()
	{
		$url = 'http://rssblog.ameba.jp/alexander1203/rss20.xml';
		$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
		$feed = new Feed();
		$res = $feed->load($url, $ua);
		$this->assertTrue(!empty($res));
	}

	public function testFeedAtom()
	{
		$url = 'http://googlejapan.blogspot.com/atom.xml';
		$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36';
		$feed = new Feed();
		$res = $feed->load($url, $ua);
		$this->assertTrue(!empty($res));
	}

	public function tearDown()
	{
	}
}

<?php

namespace app\scanners;

use app\contracts\ScannerAbstract;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use Throwable;

class EtherScanner extends ScannerAbstract
{
	public function getBaseCrawler(): Crawler
	{
		$client = new Client();
		try {
			$crawler = $client->request('GET', "https://etherscan.io/address/{$this->address}");
		} catch (Throwable $e) {
			// ???
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre>';
			echo '<pre>' . print_r($e->getLine(), true) . '</pre>';
			echo '<pre>' . print_r($e->getFile(), true) . '</pre>';
			die();
		}

		return $crawler;
	}

	public function getWalletBornAt()
	{
	}

	public function getWalletUsdValue()
	{
		$txt = $this->crawler->filter('button#dropdownMenuBalance')->text();
		$txt = substr($txt, 1, strpos($txt, '(') - 1);
		$txt = str_replace(',', '', $txt);
		
		return doubleval($txt);
	}

	public function getWalletTopTokens()
	{
	}
}

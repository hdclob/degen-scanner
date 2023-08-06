<?php

namespace app\contracts;

use yii\base\BaseObject;
use Symfony\Component\DomCrawler\Crawler;

abstract class ScannerAbstract extends BaseObject
{
	/** @var string */
	public $address;
	/** @var Crawler */
	protected $crawler;

	public function __construct($address, $config = [])
	{
		$this->address = $address;

		parent::__construct($config);
	}

	public function init()
	{
		$this->crawler = $this->getBaseCrawler();

		parent::init();
	}

	abstract public function getBaseCrawler() : Crawler;

	abstract public function getWalletBornAt();

	abstract public function getWalletUsdValue();

	abstract public function getWalletTopTokens();
}

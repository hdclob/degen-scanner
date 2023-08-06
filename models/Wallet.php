<?php

namespace app\models;

use app\models\base\BaseModel;
use app\scanners\EtherScanner;
use Goutte\Client;
use GuzzleHttp\Exception\ClientException;
use Symfony\Component\DomCrawler\Crawler;
use Throwable;
use yii\helpers\ArrayHelper;

class Wallet extends BaseModel
{
	public $id;
	public $bornAt;
	public $usdValue;
	public $topTokens = [];

	public function rules()
	{
		return [
			[['id'], 'string'],
			[['bornAt'], 'integer'],
			[['usdValue'], 'double'],
			[['topTokens'], 'safe']
		];
	}

	public function fetch($address)
	{
		$etherScanner = new EtherScanner($address);

		$this->id = $address;
		// $this->bornAt = ArrayHelper::getValue($content, 'data.user.desc.born_at');
		$this->usdValue = $etherScanner->getWalletUsdValue();

		echo '<pre>' . print_r($this->attributes, true) . '</pre>'; die();
		// $this->followerCount = ArrayHelper::getValue($content, 'data.user.follower_count');
		// $this->followingCount = ArrayHelper::getValue($content, 'data.user.following_count');

		// $topTokens = ArrayHelper::getValue($content, 'data.user.stats.top_tokens', []);
		// foreach ($topTokens as $topToken) {
		// 	$this->topTokens[] = [
		// 		'symbol' => ArrayHelper::getValue($topToken, 'symbol'),
		// 		'usdValue' => ArrayHelper::getValue($topToken, 'usd_value'),
		// 		'percent' => ArrayHelper::getValue($topToken, 'percent'),
		// 		'logoUrl' => ArrayHelper::getValue($topToken, 'logo_url'),
		// 	];
		// }
	}

	public function analyse()
	{
		if ($this->isEmpty()) {
			return;
		}

		"https://api.debank.com/history/list?user_addr={$this->id}&chain=&start_time=0&page_count=20";
	}
}

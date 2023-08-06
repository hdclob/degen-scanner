<?php

namespace app\controllers;

use app\helpers\DateTimeHelper;
use app\helpers\FinancialHelper;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use yii\data\ArrayDataProvider;
use simplehtmldom\HtmlWeb;

class NewTokensController extends Controller
{
	// public function actionIndex()
	// {
	// 	$client = new Client();
	// 	$data = [];
	// 	for ($i = 1;; $i++) {
	// 		try {
	// 			$resp = $client->request('get', "https://www.dextools.io/shared/analytics/pairs?page=$i");
	// 		} catch (ClientException $e) {
	// 			break;
	// 		}

	// 		$content = json_decode($resp->getBody()->getContents(), true);

	// 		if (strtoupper($content['code']) != 'OK') {
	// 			break;
	// 		}

	// 		$content = $content['data'];

	// 		$content = array_filter($content, function ($el) {
	// 			return ArrayHelper::getValue($el, 'token.creationTime', false);
	// 		});

	// 		$d = [];
	// 		foreach ($content as $c) {
	// 			$d[] = [
	// 				'name' => ArrayHelper::getValue($c, 'token.name'),
	// 				'price' => ArrayHelper::getValue($c, 'price'),
	// 				'age' => ArrayHelper::getValue($c, 'token.creationTime'),
	// 				'price_variance' => round(FinancialHelper::getPriceVariance(ArrayHelper::getValue($c, 'price'), ArrayHelper::getValue($c, 'price5m')), 2),
	// 				'liquidity' => ArrayHelper::getValue($c, 'pair.liquidity'),
	// 				'locked_liquidity' => null,
	// 				'volume' => ArrayHelper::getValue($c, 'volume5m'),
	// 				'total_supply' => ArrayHelper::getValue($c, 'token.metrics.totalSupply'),
	// 				'circulating_supply' => null,
	// 				'total_market_cap' => ArrayHelper::getValue($c, 'token.metrics.fdv'),
	// 				'circulating_market_cap' => null,
	// 				'holders' => ArrayHelper::getValue($c, 'pair.dextScore.holders'),
	// 			];
	// 		}

	// 		$data = array_merge($data, $d);

	// 		break;
	// 	}

	// 	usort($data, function ($a, $b) {
	// 		return strtotime($b['age']) - strtotime($a['age']);
	// 	});

	// 	$dataProvider = new ArrayDataProvider([
	// 		'allModels' => $data
	// 	]);

	// 	return $this->render('index', [
	// 		'dataProvider' => $dataProvider
	// 	]);
	// }
	public function actionIndex()
	{
		// $doc = new HtmlWeb();
		// $html = $doc->load("https://dexscreener.com/new-pairs?rankBy=volume&order=desc&chainIds=ethereum&minLiq=10000&maxAge=24");

		// echo '<pre>' . print_r($html, true) . '</pre>'; die();

		// foreach ($html->find('a') as $e) {
		// 	echo $e->href . '<br>' . PHP_EOL;
		// }

		// return $this->render('index', [
		// 	'dataProvider' => $dataProvider
		// ]);
	}
}

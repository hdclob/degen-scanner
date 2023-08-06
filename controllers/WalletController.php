<?php

namespace app\controllers;

use app\models\base\DynamicForm;
use app\models\Wallet;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class WalletController extends Controller
{
	public function actionIndex()
	{
		$wallet = new Wallet();
		$searchModel = new DynamicForm([
			'address'
		]);
		$searchModel->addRule(['address'], 'string');
		$searchModel->setFormName('WalletSearch');

		if ($this->request->isPost && $searchModel->load($this->request->post())) {
			$wallet->fetch($searchModel->address);
		}

		return $this->render('index', [
			'searchModel' => $searchModel,
			'wallet' => $wallet,
			'topTokensDataProvider' => new ArrayDataProvider([
				'allModels' => $wallet->topTokens
			])
		]);
	}
}

<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
	/**
	 * {@inheritdoc}
	 */
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			]
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex()
	{
		return $this->render('index');
	}

	/**
	 * Error page.
	 *
	 * @return string
	 */
	public function actionError()
	{
		return $this->render('error');
	}
}

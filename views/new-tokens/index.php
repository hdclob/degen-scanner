<?php

/** @var yii\web\View $this */

use app\helpers\DateTimeHelper;
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'New Tokens';
?>

<h2 class="text-center"><?= Html::encode($this->title) ?></h2>

<div class="site-index">
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'options' => ['class' => 'table-responsive'],
		'tableOptions' => [
			'class' => 'table table-striped',
		],
		'columns' => [
			'name',
			'price',
			[
				'attribute' => 'age',
				// 'value' => function ($data) {
				// 	return DateTimeHelper::getTimeAgoString($data['age']);
				// }
			],
			'price_variance',
			'liquidity',
			'locked_liquidity',
			'volume',
			'total_supply',
			'circulating_supply',
			'total_market_cap',
			'circulating_market_cap',
			'holders'
		]
	]) ?>
</div>
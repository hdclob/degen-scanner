<?php

/** @var yii\web\View $this */
/** @var app\models\DynamicForm $searchModel */
/** @var app\models\Wallet $wallet */

use app\helpers\DateTimeHelper;
use yii\bootstrap5\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

$this->title = 'Wallets';
?>

<div class="wallets-index">

	<h1 class="text-center mb-3"><?= Html::encode($this->title) ?></h1>

	<?php Pjax::begin(['id' => 'wallet-pjax-container']) ?>

	<?php $form = ActiveForm::begin([
		'id' => 'wallet-search-form',
		'enableClientValidation' => false
	]) ?>

	<?= $form->field($searchModel, 'address')
		->textInput(['placeholder' => 'Search for an address'])
		->label(false) ?>

	<?php ActiveForm::end() ?>

	<?php if (!$wallet->isEmpty()) : ?>
		<?= DetailView::widget([
			'model' => $wallet,
			'attributes' => [
				'id',
				'bornAt',
				'usdValue',
				'followerCount',
				'followingCount'
			]
		]) ?>

		<?= GridView::widget([
			'dataProvider' => $topTokensDataProvider,
			'options' => ['class' => 'table-responsive'],
			'tableOptions' => [
				'class' => 'table table-striped',
			],
			'columns' => [
				'symbol',
				'usdValue',
				'percent',
				'logoUrl'
			]
		]) ?>
	<?php endif ?>

	<?php Pjax::end() ?>

</div>
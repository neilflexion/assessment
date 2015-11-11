<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Stores */

$this->title = $store->name;
$this->params['breadcrumbs'][] = ['label' => 'Stores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $store->store_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $store->store_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $store,
        'attributes' => [
            'store_id',
            'name',
            'location',
            'owner',
        ],
    ]) ?>

    <?= GridView:widget([
        'dataProvider' => $sales,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'fruit',
                'value' => function ($model) { return $model->fruit->type; },
            ],
            [
                'attribute' => 'variety',
                'value' => function ($model) { return $model->fruit->variety; },
            ],
            [
                'attribute' => 'cost',
                'value' => function ($model) { return '$' . $model->fruit->cost; },
            ],
            'quantity',
            [
                'attribute' => 'total',
                'value' => function ($model) { return '$' . number_format($model->fruit->cost * $model->quantity, 2); },
            ],
            [
                'attribute' => 'date',
                'value' => function ($model) { return date("Y-m-d", strtotime($model->date)); },
            ],
        ],
    ]); ?>
    <?= Html::a('Add Sale', ['sales/create', 'store' => $store->store_id], ['class' => 'btn btn-primary']) ?>
</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sales */

$this->title = 'Create Sale';
$this->params['breadcrumbs'][] = ['label' => 'Stores', 'url' => ['stores/index']];
$this->params['breadcrumbs'][] = ['label' => $store->name, 'url' => ['stores/view', 'id' => $store->store_id]];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="sales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'store' => $store,
        'fruit' => $fruit,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sales-form">

    <?php
    $form = ActiveForm::begin();
    $model->fkstore_id = $store->store_id
    ?>

    <?= Html::activeHiddenInput($model, 'fkstore_id') ?>

    <div class="form-group field-sales-fkfruit_id">
        <label class="control-label" for="sales-fkfruit_id">Fruit</label><br/>
        <?= Html::activeDropDownList($model, 'fkfruit_id',
              ArrayHelper::map($fruit, 'fruit_id', 'variety', 'type')) ?>
        <div class="help-block"></div>
    </div>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

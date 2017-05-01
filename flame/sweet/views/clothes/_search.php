<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchClothes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clothes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cloth_name') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'material') ?>

    <?= $form->field($model, 'fashion') ?>

    <?php // echo $form->field($model, 'belong') ?>

    <?php // echo $form->field($model, 'cloth_pic') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

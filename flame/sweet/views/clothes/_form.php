<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clothes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clothes-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'cloth_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fashion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'belong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cloth_pic')->fileInput()?><p>图片尺寸请选择1280px*853px</p>
    <?= Html::img($model->cloth_pic, ['width' => 100]);?>

    <?= $model->isNewRecord ? $form->field($model, 'create_time')->textInput(['type'=>'hidden','value'=>time()])->label('') :  $form->field($model, 'update_time')->textInput(['type'=>'hidden','value'=>time()])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

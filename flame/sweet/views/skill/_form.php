<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Skill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skill-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'skill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kind')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'use')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'pic')->fileInput()?><p>图片尺寸请选择1000px*562px</p>
    <?= Html::img($model->pic, ['width' => 100]);?>

    <?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>

    <?= $model->isNewRecord ? $form->field($model, 'create_time')->textInput(['type'=>'hidden','value'=>time()])->label('') :  $form->field($model, 'update_time')->textInput(['type'=>'hidden','value'=>time()])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

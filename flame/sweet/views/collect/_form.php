<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Collect */
/* @var $form yii\widgets\ActiveForm */
?>
<?=Html::jsFile('@web/flamez/UEditor/ueditor.config.js')?>
<?=Html::jsFile('@web/flamez/UEditor/ueditor.all.min.js')?>
<div class="collect-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic')->fileInput()?><p>图片尺寸请选择1000px*820px</p>
    <?= Html::img($model->pic, ['width' => 100]);?>

    <?= $form->field($model, 'fashion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['衣' => '衣', '裤' => '裤', '裙' => '裙', '鞋' => '鞋', '帽' => '帽', '配' => '配', '其他' => '其他']); ?>
    <?= $form->field($model, 'craft')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_time')->textInput() ?>

    <?= $form->field($model, 'show_address')->textInput(['maxlength' => true]) ?>

    <script id="editor" name="intro" type="text/plain" style="width:100%;height:500px;"></script>
    <script> var ue = UE.getEditor('editor',{ toolbars: [ ['fullscreen', 'source', 'undo', 'redo', 'bold','deleterow','cleardoc','simpleupload','insertimage'], ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc'] ] }); </script>
   <?= $model->isNewRecord ? $form->field($model, 'create_time')->textInput(['type'=>'hidden','value'=>time()])->label('') :  $form->field($model, 'update_time')->textInput(['type'=>'hidden','value'=>time()])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

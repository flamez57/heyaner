<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shop */
/* @var $form yii\widgets\ActiveForm */
?>
<?=Html::jsFile('@web/flamez/UEditor/ueditor.config.js')?>
<?=Html::jsFile('@web/flamez/UEditor/ueditor.all.min.js')?>
<div class="shop-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'store')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop_time')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'store_pic')->fileInput()?><p>图片尺寸请选择640px*480px</p>
    <?= Html::img($model->store_pic, ['width' => 100]);?>
    <script id="editor" name="intro" type="text/plain" style="width:100%;height:500px;"></script>
    <script> var ue = UE.getEditor('editor',{ toolbars: [ ['fullscreen', 'source', 'undo', 'redo', 'bold','deleterow','cleardoc','simpleupload','insertimage'], ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc'] ] }); </script>

    <?= $model->isNewRecord ? $form->field($model, 'create_time')->textInput(['type'=>'hidden','value'=>time()])->label('') :  $form->field($model, 'update_time')->textInput(['type'=>'hidden','value'=>time()])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

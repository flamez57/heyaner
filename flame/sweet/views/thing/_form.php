<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Thing */
/* @var $form yii\widgets\ActiveForm */
?>
<?=Html::jsFile('@web/flamez/UEditor/ueditor.config.js')?>
<?=Html::jsFile('@web/flamez/UEditor/ueditor.all.min.js')?>
<div class="thing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <script id="editor" name="content" type="text/plain" style="width:100%;height:500px;"></script>
    <script> var ue = UE.getEditor('editor',{ toolbars: [ ['fullscreen', 'source', 'undo', 'redo', 'bold','deleterow','cleardoc','simpleupload','insertimage'], ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc'] ] }); </script>

    <?= $model->isNewRecord ? $form->field($model, 'create_time')->textInput(['type'=>'hidden','value'=>time()])->label('') :  $form->field($model, 'update_time')->textInput(['type'=>'hidden','value'=>time()])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

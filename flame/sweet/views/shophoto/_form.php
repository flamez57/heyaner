<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Shophoto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shophoto-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

	<?php echo $form->field($model, 'shop_id')->dropDownList(ArrayHelper::map($models,'id', 'store')); ?>
	
	<?= $form->field($model, 'photo')->fileInput()?><p>图片尺寸请选择800px*600px</p>
    <?= Html::img($model->photo, ['width' => 100]);?>

    <?= $model->isNewRecord ? $form->field($model, 'create_time')->textInput(['type'=>'hidden','value'=>time()])->label('') :  $form->field($model, 'update_time')->textInput(['type'=>'hidden','value'=>time()])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

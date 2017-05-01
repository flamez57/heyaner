<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clothesphoto */

$this->title = '修改衣服图片: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '衣服图片', 'url' => ['index','coat_id'=>$model->coat_id]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="clothesphoto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

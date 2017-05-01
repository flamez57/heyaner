<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shophoto */

$this->title = '修改店铺图册: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '店铺图册', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="shophoto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'models' => $models,
    ]) ?>

</div>

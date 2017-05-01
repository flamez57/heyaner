<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Collect */

$this->title = '修改藏品: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '收藏品', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="collect-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

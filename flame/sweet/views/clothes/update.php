<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clothes */

$this->title = '修改衣服资料: ' . $model->cloth_name;
$this->params['breadcrumbs'][] = ['label' => '衣服', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cloth_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="clothes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

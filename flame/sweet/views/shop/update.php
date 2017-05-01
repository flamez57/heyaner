<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shop */

$this->title = '修改店铺: ' . $model->store;
$this->params['breadcrumbs'][] = ['label' => '店铺', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->store, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="shop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

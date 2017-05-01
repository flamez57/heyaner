<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Shophoto */

$this->title = '添加店铺图片';
$this->params['breadcrumbs'][] = ['label' => '店铺图册', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shophoto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'models' => $models,
    ]) ?>

</div>

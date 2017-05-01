<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Thing */

$this->title = '添加公司介绍';
$this->params['breadcrumbs'][] = ['label' => '公司介绍', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

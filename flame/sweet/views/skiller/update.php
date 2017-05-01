<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skiller */

$this->title = '修改手艺人: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '手艺人', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="skiller-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

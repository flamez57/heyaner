<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Things */

$this->title = '修改since1994: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'since1994', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="things-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skillart */

$this->title = '修改手艺活动: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '手艺活动', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skillart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

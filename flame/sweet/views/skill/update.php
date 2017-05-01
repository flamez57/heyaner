<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skill */

$this->title = '修改手艺: ' . $model->skill;
$this->params['breadcrumbs'][] = ['label' => '手艺', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->skill, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="skill-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

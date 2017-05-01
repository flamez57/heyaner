<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Skill */

$this->title = '添加手艺';
$this->params['breadcrumbs'][] = ['label' => '手艺', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skill-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

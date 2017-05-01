<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Skillart */

$this->title = '添加手艺活动';
$this->params['breadcrumbs'][] = ['label' => '手艺活动', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skillart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Collect */

$this->title = '添加收藏品';
$this->params['breadcrumbs'][] = ['label' => '收藏品', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collect-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

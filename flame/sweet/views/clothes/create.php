<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clothes */

$this->title = '添加衣服';
$this->params['breadcrumbs'][] = ['label' => '衣服', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clothes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

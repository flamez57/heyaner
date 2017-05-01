<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Skiller */

$this->title = '添加手艺人';
$this->params['breadcrumbs'][] = ['label' => '手艺人', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skiller-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

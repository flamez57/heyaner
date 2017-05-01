<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clothesphoto */

$this->title = '添加衣服组图';
$this->params['breadcrumbs'][] = ['label' => '衣服组图', 'url' => ['index','coat_id'=>$model->coat_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clothesphoto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Things */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'since1994', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="things-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你舍得删除我呀?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clothesphoto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '衣服组图', 'url' => ['index','coat_id'=>$model->coat_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clothesphoto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'coat_id',
            'photo',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

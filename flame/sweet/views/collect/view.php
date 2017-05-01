<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Collect */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '收藏品', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collect-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你真的要删除我吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'pic'=>[
                'attribute' => 'pic',
                'label' => '店铺图册',
                'format' => 'raw',
                'value' => Html::a(Html::img($model->pic, ['width' => 100]),$model->pic),
            ],
            'fashion',
            'material',
            'type',
            'craft',
            'show_time:datetime',
            'show_address',
            'intro:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

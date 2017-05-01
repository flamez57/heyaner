<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shop */

$this->title = $model->store;
$this->params['breadcrumbs'][] = ['label' => '店铺', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'store',
            'address',
            'phone',
            'shop_time',
            'store_pic'=>
            [
            'attribute' => 'store_pic',
            'label' => '店面照片',
            'format' => 'raw',
            'value' => Html::a(Html::img($model->store_pic, ['width' => 400]),$model->store_pic),
            ],
            'intro:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

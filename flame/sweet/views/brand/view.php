<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Brand */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你真的舍得删除我呀?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'brand_pic'=>[
                'attribute' => 'brand_pic',
                'label' => '店铺图册',
                'format' => 'raw',
                'value' => Html::a(Html::img($model->brand_pic, ['width' => 100]),$model->brand_pic),
            ],
            'url:url',
            'interaction_id',
            'status',
            'where',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

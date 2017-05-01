<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clothes */

$this->title = $model->cloth_name;
$this->params['breadcrumbs'][] = ['label' => '衣服', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clothes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('衣服图库', ['clothesphoto/index', 'coat_id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定舍得删除?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cloth_name',
            'model',
            'material',
            'fashion',
            'belong',
            'cloth_pic'=>[
                'attribute' => 'cloth_pic',
                'label' => '衣服图片',
                'format' => 'raw',
                'value' => Html::a(Html::img($model->cloth_pic, ['width' => 100]),$model->cloth_pic),
            ],
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

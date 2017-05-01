<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shophoto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '店铺图册', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shophoto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您真的要狠心删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'shop_id',
            'photo'=>[
                'attribute' => 'photo',
                'label' => '店铺图册',
                'format' => 'raw',
                'value' => Html::a(Html::img($model->photo, ['width' => 100]),$model->photo),
            ],
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

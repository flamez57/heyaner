<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Skillart */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '手艺活动', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skillart-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定舍得删除我?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'pic'=>[
                'attribute' => 'pic',
                'label' => '活动图片',
                'format' => 'raw',
                'value' => Html::a(Html::img($model->pic, ['width' => 100]),$model->pic),
            ],
            'art_time',
            'art_address',
            'art_intro:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

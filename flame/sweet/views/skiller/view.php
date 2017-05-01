<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Skiller */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '手艺人', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skiller-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你真舍得删除我吗?',
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
                'label' => '手艺人头像',
                'format' => 'raw',
                'value' => Html::a(Html::img($model->pic, ['width' => 100]),$model->pic),
            ],
            'skill',
            'workage',
            'intro:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

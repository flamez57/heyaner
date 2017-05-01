<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Skill */

$this->title = $model->skill;
$this->params['breadcrumbs'][] = ['label' => '手艺', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skill-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你真的舍得删掉?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'skill',
            'kind',
            'use',
            'pic'=>[
                'attribute' => 'pic',
                'label' => '手艺样品图',
                'format' => 'raw',
                'value' => Html::a(Html::img($model->pic, ['width' => 100]),$model->pic),
            ],
            'intro:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>

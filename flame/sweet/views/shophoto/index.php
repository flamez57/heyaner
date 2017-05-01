<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchShophoto */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '店铺图册';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shophoto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加店铺图册-图片', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'shop_id',
            'photo'=>[
                'attribute' => 'photo',
                'label' => '店铺图册',
                'format' => ['image',['width'=>'40','height'=>'30',]],
            ],
            'create_time:datetime',
            'update_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

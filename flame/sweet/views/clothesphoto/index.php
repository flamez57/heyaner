<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchClothesphoto */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '衣服组图';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clothesphoto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加衣服组图', ['create','coat_id'=>$_GET['coat_id']], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'coat_id',
            'photo'=>[
                'attribute' => 'photo',
                'label' => '衣服图册',
                'format' => ['image',['width'=>'40','height'=>'30',]],
            ],
            // 'create_time:datetime',
            // 'update_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

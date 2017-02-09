<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Записи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trevel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'category_id',
              [ 'attribute' => 'category_id',
               'value' => function ($data){
                  return $data->category->name;
               },
            ],
//            'categori',
            'title',
//            'description:ntext',
            // 'text:ntext',
            // 'date',
            // 'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

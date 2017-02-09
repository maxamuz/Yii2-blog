<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добвавить комментарий', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'comment_id',
            [
               'attribute' => 'comment_id',
                'value' => function($data){
                    return $data->trevel->title;
                },
                'format' => 'raw',           
            ],
            'name',
            'email:email',
//            'text:ntext',
            [
               'attribute' => 'toadd',
                'value' => function($data){
                    return !$data->toadd ? 
                        '<span class="text-success">Непубликован</span>' :
                        '<span class="text-danger">Опубликован</span>';
                },
                'format' => 'raw',           
            ],
//            'toadd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

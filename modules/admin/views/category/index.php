<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категрии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,    
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn',
                
            'header'=>'Действия', 
            'headerOptions' => 
                ['style'=>'width: 120; text-align: center'],
                'contentOptions' =>
                ['style' => 
                'white-space: nowrap; text-align: center; letter-spacing: 0.1em; max-width: 7em;'
                 ],
             'buttons'=>[
                  'view'=>function ($url, $model) {    
                        return Html::a
                            ('<span class="glyphicon glyphicon-eye-open"></span>',$url,
                                                ['title' =>'Просмотреть']);
                            },
                   'update'=>function ($url, $model) {    
                        return Html::a
                            ('<span class="glyphicon glyphicon-pencil"></span>',$url,
                                                ['title' =>'Редактировать']);
                            },
                    'delete' => function ($url) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title' => Yii::t('yii', 'Удалить'),
                            'data-confirm'=>"Вы действительно хотите удалить эту категорию?",
                            'data-pjax'=>'1'
                        ]);
                    },
                        ],
            ],
        ],
    ]); ?>
</div>

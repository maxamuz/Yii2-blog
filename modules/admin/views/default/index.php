<?php

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="admin-default-index">
    <div class="container">

        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked nav-admin">
                <li class="active"><a href="<?= Yii::$app->urlManager->createURL(["admin/category"]) ?>">Управление категориями</a></li>
                <li class="active"><a href="<?= Yii::$app->urlManager->createURL(["admin/trevel"]) ?>">Управление записями</a></li>
                <li class="active"><a class="nav-a" href="<?= Yii::$app->urlManager->createURL(["admin/comment"]) ?>">Управление комментариями</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <h2>Добро пожаловать Админ!</h2>
            <div class="grid-container">
                <h3>Комментарии могут ожидать проверки:</h3>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
//                        ['class' => 'yii\grid\SerialColumn'],
                                    'id',
                        //            'comment_id',
                        [
                            'attribute' => 'comment_id',
                            'value' => function($data) {
                                return $data->trevel->title;
                            },
                            'format' => 'raw',
                        ],
                        'name',
                //                    'email:email',
                        //            'text:ntext',
                        [
                            'attribute' => 'toadd',
                            'value' => function($data) {
                                return !$data->toadd ?
                                        '<span class="text-success">Непубликован</span>' :
                                        '<span class="text-danger">Опубликован</span>';
                            },
                            'format' => 'raw',
                        ],
                    //            'toadd',
                //                    ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
            </div>
            <div class="grid-container">
                <h3>Последние посты:</h3>
            <?= GridView::widget([
                'dataProvider' => $dataTrevel,
                'columns' => [
//                    ['class' => 'yii\grid\SerialColumn'],

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
                     'date',
                    // 'img',

//                    ['class' => 'yii\grid\ActionColumn'],
                ],
                ]); 
            ?>
            </div>
        </div>
    </div>
</div>

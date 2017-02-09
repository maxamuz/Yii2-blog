<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Comment */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Комментарии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить этот комментарий?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'comment_id',
            [
               'attribute' => 'comment_id',
                'value' =>  $model->trevel->title,   
                'format' => 'raw',           
            ],
            'name',
            'email:email',
            'text:ntext',
            [
                'attribute' => 'toadd',
                'value' =>
                        !$model->toadd ?
                            '<span class="text-success">Неопубликован</span>' :
                            '<span class="text-danger">Опубликован</span>',
                'format' => 'raw',
            ],
//            'toadd',
        ],
    ])
    ?>

</div>

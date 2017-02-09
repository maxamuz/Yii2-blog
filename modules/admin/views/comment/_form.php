<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'comment_id')->textInput() ?>
    
        <!--Вывод спика постов в поле редактирования и добавления постов.-->
    
    <?= $form->field($model, 'comment_id')->textInput()->dropDownList(yii\helpers\ArrayHelper::map(app\modules\admin\models\Trevel::find()->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?php// $form->field($model, 'toadd')->textInput() ?>
    <?= $form->field($model, 'toadd')->checkbox(['0' =>'Неопубликован','1' =>'Опубликован']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

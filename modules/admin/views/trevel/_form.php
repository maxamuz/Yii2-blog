<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Trevel */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="trevel-form">
 
    <?php $form = ActiveForm::begin(); ?>

    <?php// $form->field($model, 'category_id')->textInput() ?>
    
    <?php echo $form->field($model, 'category_id')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name'))?>

    <?php// $form->field($model, 'categori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['id'=>'description_id']) ?>
    <script type="text/javascript">
	CKEDITOR.replace( 'description_id' );
    </script>
    <?= $form->field($model, 'text')->textarea(['id'=>'text_id']) ?>
    
    <script type="text/javascript">
	CKEDITOR.replace( 'text_id' );
    </script>

    <?= $form->field($model, 'date')->textInput() ?>

    <?php// $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

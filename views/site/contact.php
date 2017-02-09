<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\assets\AdAsset;

AdAsset::register($this);

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="templatemo_right_column">
    
        <div id="templatemo_main">
        
            <h1>Contact Us</h1>

        <p><em>Aliquam pretium porta odio. Fusce quis diam sit amet tortor luctus pellentesque. Donec accumsan urna non elit tristique mattis. Vivamus fermentum orci viverra nisl. In nec magna id ipsum  aliquam dictum.</em></p>
        <p>Donec euismod enim et risus. Nunc dictum, massa non dignissim commodo, metus quam vehicula lorem, et dignissim enim augue vitae pede. Donec at arcu. Nunc aliquam, dolor vitae sollicitudin lacinia, nibh orci sagittis diam, dignissim sodales dui erat nec eros. <a href="#">Fusce quis enim</a>.</p>
        <p>Aenean eleifend, neque hendrerit elementum sodales, <a href="#">odio erat sagittis quam</a>, sed tempor orci magna vitae tellus. Proin dui mauris, tempor eget, pulvinar sed, pretium sit amet, dui. Proin vulputate justo et quam. Cras nisl eros, elementum eu, iaculis vitae, viverra ut, ligula. Pellentesque metus. Duis dolor.</p>
        <div class="cleaner_h50"></div>

            <div id="contact_form">
            
                <h2>Contact Form</h2>
                
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            
            </div> 
        
        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div> <!-- end of right column -->

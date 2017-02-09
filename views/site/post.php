<?php
/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'My Travels';
?>
<div id="templatemo_right_column">

    <div class="projectslider">
        <div id="slider">
            <ul id="sliderContent">
                <li class="sliderImage">
                    <a href=""><img src="/public/images/itali1.jpg" alt="1" /></a>
                    <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                </li>
                <li class="sliderImage">
                    <a href=""><img src="/public/images/itali2.jpg" alt="2" /></a>
                    <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                </li>
                <li class="sliderImage">
                    <img src="/public/images/itali3.jpg" alt="3" />
                    <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                </li>
                <li class="sliderImage">
                    <img src="/public/images/kit3.jpg" alt="4" />
                    <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </li>
                <li class="clear sliderImage"></li>
            </ul>
        </div>
    </div>

    <div id="templatemo_main">


        <div class="post_section">

            <span class="comment"><?php echo ($cout)?></span>

            <h2><?= $post[title] ?></h2>

            <?= Yii::$app->formatter->asDate($post[date], 'long') ?> | <strong>Category:</strong> <a href="<?= \yii\helpers\Url::to(['site/view', 'id' => $post->category->id]) ?>">

                <!--Вывод названия рубрики из категорий через связанные таблицы-->    
                <?= $post->category->name ?>

            </a>    
            <p><?= $post[text] ?></p>
            
        </div>
        
        <?php foreach ($comments as $comment) :?>
        <?php if ($comment->toadd == 1) :?>
        <div class="post_section">
            <h3><?= $comment[name] ?></h3> 
            <p><?= $comment[text] ?></p>
        </div>
        <?php endif ?>
        <?php endforeach;?>
        
         <?php $form = ActiveForm::begin(['id' => 'myForm'])?>
    
            <?= $form->field($models, 'name')?>
    
            <?= $form->field($models, 'email')?>
    
            <?= $form->field($models, 'text')->textarea(['rows'=>6])?>
    
            <?= Html::submitButton('Отправить!', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    
        <?php ActiveForm::end()?>
        
    </div>
    
 
        
 
    

    <div class="cleaner"></div>

</div>


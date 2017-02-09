<?php
/* @var $this yii\web\View */
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
     <?php foreach ($texts as $text) :?>        
        <div class="post_section">

             
    
            <span class="comment"><?= count($text->publicomment) ?></span>
                
            
            <h2><a href="<?= Yii::$app->urlManager->createURL(["site/post", 'id' => $text[id]]) ?>"><?= $text[title] ?></a></h2>

            <?= Yii::$app->formatter->asDate($text[date], 'long')?> | <strong>Category:</strong> <a href="<?= \yii\helpers\Url::to(['site/view', 'id' => $text->category->id])?>"><?= $text->category->name?>     
            </a>
            <p><?= $text[description] ?></p>
            <a href="<?= Yii::$app->urlManager->createURL(["site/post", 'id' => $text[id]]) ?>">Continue reading...</a>

        </div>
        <?php endforeach;?>
        
    </div>

    <div class="cleaner"></div>
</div>


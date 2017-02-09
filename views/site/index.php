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
                    <span class="top"><strong>Проект 1</strong><br />Развороченые башни, скованые цепью. Пьяные рыцари.</span>
                </li>
                <li class="sliderImage">
                    <a href=""><img src="/public/images/itali2.jpg" alt="2" /></a>
                    <span class="bottom"><strong>Проект 2</strong><br />Тоннель где-то в европе. Машины въезжают и выезжают!</span>
                </li>
                <li class="sliderImage">
                    <img src="/public/images/itali3.jpg" alt="3" />
                    <span class="left"><strong>Проект 3</strong><br />Какой-то город в Италии</span>
                </li>
                <li class="sliderImage">
                    <img src="/public/images/kit3.jpg" alt="4" />
                    <span class="right"><strong>Проект 4</strong><br />Монастырь Шаолинь. Шаолиньские монахи. Кунг-фу!</span>
                </li>
                <li class="clear sliderImage"></li>
            </ul>
        </div>
    </div>
    
    <div id="templatemo_main">      
        <?php foreach ($trev as $tr) :?>
        
        

        <div class="post_section">

            <span class="comment"><?= count($tr->publicomment) ?></span>
            
            <h2><a href="<?= Yii::$app->urlManager->createURL(["site/post", 'id' => $tr[id]]) ?>"><?= $tr[title] ?></a></h2>
                 <?= Yii::$app->formatter->asDate($tr[date], 'long')?> | <strong>Category:</strong> <a href="<?= \yii\helpers\Url::to(['site/view', 'id' => $tr->category->id])?>"><?= $tr->category->name?></a>
            <p><?= $tr[description] ?></p>
            <a href="<?= Yii::$app->urlManager->createURL(["site/post", 'id' => $tr[id]]) ?>">Continue reading...</a>

        </div>
        <?php endforeach;?>
      <?= \yii\widgets\LinkPager::widget(['pagination' => $pages])?>  
    </div>

    <div class="cleaner"></div>
</div>
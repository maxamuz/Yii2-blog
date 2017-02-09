
<!-- Через цикл foreach перебираем категории из базы данных.-->

<h4>Категории</h4> 
<ul class="templatemo_list">
    <?php foreach ($data as $dec) :?>   
    <li><a href="<?= \yii\helpers\Url::to(['site/view', 'id'=>$dec['id']])?>">
        <?= $dec[name]?></a>
    </li>
    <?php endforeach;?>
</ul>
<div class="cleaner_h40"></div>
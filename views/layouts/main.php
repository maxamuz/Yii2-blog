<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\components\CategoriWidget;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
$action = Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <?= Html::csrfMetaTags() ?>
                <title><?= Html::encode($this->title) ?></title>
                <?php $this->head() ?>

                <!-- JavaScripts-->
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#slider').s3Slider({
                            timeOut: 3600
                        });
                    });
                </script>

                </head>
                <body>
                    <?php $this->beginBody() ?>

                    <div id="templatemo_wrapper">

                        <div class="templatemo_menu">

                            <ul>
                                <li><a href=<?= Yii::$app->urlManager->createURL(["site/index"]) ?> <?php if ($action == index) { ?> class="current" <?php } ?>>Блог</a></li>
                                <li><a href=<?= Yii::$app->urlManager->createURL(["site/portfolio"]) ?> <?php if ($action == portfolio) { ?> class="current" <?php } ?>>Портфолио</a></li>
                                <li><a href=<?= Yii::$app->urlManager->createURL(["site/about"]) ?> <?php if ($action == about) { ?> class="current" <?php } ?>>Обо мне</a></li>
                                <li><a href=<?= Yii::$app->urlManager->createURL(["site/contact"]) ?> <?php if ($action == contact) { ?> class="current" <?php } ?>>Контакты</a></li>
                                 <li><a href=<?= Yii::$app->urlManager->createURL(["/admin"]) ?> <?php if ($action == admin) { ?> class="current" <?php } ?>>Вход</a></li>
                            </ul>   

                        </div> <!-- end of templatemo_menu -->

                        <div id="templatemo_left_column">

                            <div id="templatemo_header">

                                <div id="site_title">
                                    <h1><a href="<?= \yii\helpers\Url::home()?>">My <strong>Travels</strong><span>Весь мир в одном блоге</span></a></h1>
                                </div><!-- end of site_title -->

                            </div> <!-- end of header -->  

                            <div id="templatemo_sidebar">

                                <div id="templatemo_rss">

                                    <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>

                                </div>
                                <?php echo CategoriWidget::widget(); ?>


                                <h4>Друзья</h4>
                                <ul class="templatemo_list">
                                    <li><a href="#">Free CSS Templates</a></li>
                                    <li><a href="#">Flash Templates</a></li>
                                    <li><a href="#">Premium Themes</a></li>
                                    <li><a href="#">Web Design Blog</a></li>
                                    <li><a href="#">Flash Web Gallery</a></li>
                                    <li><a href="#">Curabitur sed lacinia</a></li>
                                    <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                                    <li><a href="#">Nullam nec mi enim</a></li>
                                    <li><a href="#">Aliquam quam nulla</a></li>
                                    <li><a href="#">Curabitur non felis massa</a></li>
                                </ul>

                            </div> <!-- end of templatemo_sidebar --> 

                        </div> <!-- end of templatemo_left_column -->

                        <?= $content ?> 
                        <!-- end of templatemo_main -->
                        <div class="cleaner_h20"></div>

                        <div id="templatemo_footer">

                            Copyright © <?= date("Y") ?> <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->| 
                            Validate <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>

                        </div>

                        <div class="cleaner"></div>
                    </div> <!-- end of warpper -->
                    <!-- templatemo 251 clean blog -->
                    <!-- 
                    Clean Blog Template 
                    http://www.templatemo.com/preview/templatemo_251_clean_blog 
                    -->
                    <?php $this->endBody() ?>
                </body>
                </html>
                <?php $this->endPage() ?>
<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Trevel;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Comment;




class SiteController extends Controller
{   

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()    
    {
        $query = Trevel::find(); 
        $pages = new \yii\data\Pagination(['totalCount' => $query -> count(), 'pagesize' => 4]);
        $trev = $query -> offset($pages->offset) -> limit($pages->limit)->all();
        return $this->render('index', compact('trev', 'pages')); 
        
    }

    public function actionPortfolio()
    {
        return $this->render('portfolio');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        
        return $this->render('about');
    }
    
    public function actionPost() 
    {   
        $models = new Comment;
        
// Извлекаем ID страницы в переменную ID
        
        $id_post = \Yii::$app->request->get('id'); 
        
//Если в models есть данные, то присваиваем полю comment_id id поста, сохраняем 
//        все данные в базу и перезагружаем страницу методом refresh.
        
        if ($models->load(Yii::$app->request->post())){
            $models->comment_id = $id_post;
            $models->save();
            return $this->refresh();
        }    
        $post = Trevel::findOne($id_post);
        $comments = Comment::find()->where(['comment_id' => $id_post])->all();                
        
//        Выводим количество комментариев в зависимости от ID страницы и статуса 'toadd'.
        
        $cout = Comment::find()->asArray()->where(['comment_id' => $id_post, 'toadd'=>1])->count();
        
        return $this->render('post', compact('post', 'comments', 'models', 'cout'));
    }
    public function actionView() 
    {   
        $id = \Yii::$app->request->get('id'); 
        $texts = Trevel::find()->where(['category_id' => $id])->all();
        return $this->render('view', compact('texts'));
        
    }
    
   
}
 
 
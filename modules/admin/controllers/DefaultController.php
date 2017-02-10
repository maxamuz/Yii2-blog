<?php

namespace app\modules\admin\controllers;

use yii\data\ActiveDataProvider;
use app\modules\admin\models\Comment;
use app\modules\admin\models\Trevel;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public function behaviors() {
        return[
        'access'=> [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@']
                ]   
            ]
        ]
       ]; 
    }
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Comment::find()->orderBy(['id' => SORT_DESC]),
        ]);
        $dataTrevel = new ActiveDataProvider([
            'query' => Trevel::find()->orderBy(['id' => SORT_DESC]),
        ]);
        
        return $this->render('index', compact('dataProvider','dataTrevel'));
    }
    
}


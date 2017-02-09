<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\components;
use yii\base\Widget;
use app\models\Category;
class CategoriWidget extends Widget {
    
    

    public function run () {
        $data = Category::find()->asArray()->all();
        return $this->render('category', compact('data'));
                
    }
}

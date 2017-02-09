<?php

namespace app\models;

use yii\db\ActiveRecord;

class Trevel extends ActiveRecord {
    
    public static function tableName(){
        return 'trevel';
    }
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    public function getComment(){
        return $this->hasMany(Comment::className(), ['comment_id' => 'id']);
    }
//    Добавление количества комментариев при статусе (1 - выводит, 0 - не выводит)
    public function getPublicomment()
    {
        return  $this->getComment()->where(['toadd' => 1]);
        
    }
    
}

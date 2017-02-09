<?php


namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord {
    
    public static function tableName() {
        return 'category';
    }
    public function getTrevel(){
        return $this->hasMany(Trevel::className(), ['category_id' => 'id']);
    }
    
} 

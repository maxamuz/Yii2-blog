<?php

namespace app\models;

use yii\db\ActiveRecord;


class Comment extends ActiveRecord {
    
    


    public static function tableName() {
        return 'comment';
    }
    public function getTrevel(){
        return $this->hasOne(Trevel::className(), ['id' => 'comment_id']);
    }
    
    public function rules()
    {
        return [
            [['comment_id', 'name', 'email', 'text'], 'required'],
            [['comment_id', 'toadd'], 'integer'],
            [['text'], 'string'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }
   public function attributeLabels()
    {
        return [            
            'id' => 'ID',
            'comment_id' => 'Пост',
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст',
            'toadd' => 'Статус',
        ];
    }
    
}

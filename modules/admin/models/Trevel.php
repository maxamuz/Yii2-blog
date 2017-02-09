<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "trevel".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $categori
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $date
 * @property string $img
 */
class Trevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trevel';
    }
    
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[
                'category_id', 
//                'categori', 
                'title', 
                'description', 
                'text', 
//                'img'
                ], 
                'required'
            ],
            [['category_id'], 'integer'],
            [['description', 'text'], 'string'],
            [['date'], 'safe'],
            [['categori', 'title', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
//            'categori' => 'Категория',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'text' => 'Полный текст',
            'date' => 'Дата',
            'img' => 'Картинка',
        ];
    }
}

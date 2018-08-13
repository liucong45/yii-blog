<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $name
 * @property int $frequency
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['frequency'], 'integer'],
            [['name'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'frequency' => 'Frequency',
        ];
    }

    public static function string2array($tags){
        return explode(',',trim($tags));
    }

    public static function array2string($tags){
        return implode(', ',$tags);
    }

    public static function addTags($tags){
        if (!empty($tags)){
            foreach($tags as $name){
                $aTag = Tag::find()->where(['name'=>$name])->one();
                if ($aTag){
                    $aTag->frequency += 1;
                    $aTag->save();
                }else{
                    $tag = new Tag;
                    $tag->name = $name;
                    $tag->frequency = 1;
                    $tag->save();
                }
            }
        }
    }

    public static function removeTags($tags){

    }
}

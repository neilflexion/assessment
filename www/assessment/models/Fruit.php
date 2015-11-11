<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fruit".
 *
 * @property integer $fruit_id
 * @property string $type
 * @property string $variety
 * @property string $cost
 *
 * @property Sales[] $sales
 */
class Fruit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fruit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string'],
            [['cost'], 'number'],
            [['variety'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fruit_id' => 'Fruit ID',
            'type' => 'Type',
            'variety' => 'Variety',
            'cost' => 'Cost',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['fkfruit_id' => 'fruit_id']);
    }
}

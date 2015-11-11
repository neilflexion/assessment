<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sales".
 *
 * @property integer $id
 * @property integer $fkstore_id
 * @property integer $fkfruit_id
 * @property integer $quantity
 * @property string $date
 *
 * @property Stores $fkstore
 * @property Fruit $fkfruit
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkstore_id', 'fkfruit_id', 'quantity'], 'integer'],
            [['date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fkstore_id' => 'Fkstore ID',
            'fkfruit_id' => 'Fkfruit ID',
            'quantity' => 'Quantity',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Stores::className(), ['store_id' => 'fkstore_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFruit()
    {
        return $this->hasOne(Fruit::className(), ['fruit_id' => 'fkfruit_id']);
    }
}

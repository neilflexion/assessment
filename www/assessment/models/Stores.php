<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stores".
 *
 * @property integer $store_id
 * @property string $name
 * @property string $location
 * @property string $owner
 *
 * @property Sales[] $sales
 */
class Stores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'location', 'owner'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'store_id' => 'Store ID',
            'name' => 'Name',
            'location' => 'Location',
            'owner' => 'Owner',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['fkstore_id' => 'store_id']);
    }
}

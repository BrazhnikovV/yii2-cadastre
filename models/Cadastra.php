<?php

namespace brazhnikov\yii2cadastre\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "banknotes".
 *
 * @property int    $id
 * @property string $cadastral_number
 * @property string $address
 * @property int    $price
 * @property int    $area
 */
class Cadastra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cadastra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cadastral_number'], 'required'],
            [['price','area'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' =>'ID',
            'cadastral_number' => 'cadastral_number',
            'address' => 'address',
            'price' => 'price',
            'area' => 'area'
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }
}

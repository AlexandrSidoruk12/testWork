<?php

namespace app\models;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Currency extends ActiveRecord
{
    public function behaviors(): array
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new \yii\db\Expression('NOW()'),
            ],
        ];
    }

    public static function tableName(): string
    {
        return 'currency';
    }

    public function rules(): array
    {
        return [
            [['name', 'num_code', 'name_code', 'rate', 'date_for_parse'], 'required'],
            [['rate'], 'number'],
            [['name', 'num_code', 'name_code', 'date_for_parse'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'num_code' => 'Num Code',
            'name_code' => 'Name Code',
            'rate' => 'Rate',
            'date_for_parse' => 'Date for Parse',
        ];
    }
}
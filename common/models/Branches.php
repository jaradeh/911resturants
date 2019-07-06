<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "branches".
 *
 * @property int $id
 * @property string $name
 * @property string $ar_name
 * @property string $ip_address
 * @property string $expire
 */
class Branches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'ar_name', 'ip_address', 'expire'], 'required'],
            [['name', 'ar_name', 'ip_address', 'expire'], 'string', 'max' => 255],
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
            'ar_name' => 'Ar Name',
            'ip_address' => 'Ip Address',
            'expire' => 'Expire',
        ];
    }
}

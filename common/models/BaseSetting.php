<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "base_setting".
 *
 * @property string $name
 * @property string $value
 * @property string $created_date
 * @property string|null $updated_date
 */
class BaseSetting extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'base_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'value'], 'required'],
            [['created_date', 'updated_date'], 'safe'],
            [['name'], 'string', 'max' => 48],
            [['value'], 'string', 'max' => 64],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'value' => 'Value',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }
}

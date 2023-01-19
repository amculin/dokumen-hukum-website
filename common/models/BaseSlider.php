<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "base_slider".
 *
 * @property int $id
 * @property string $title
 * @property string $title_en
 * @property string $caption
 * @property string $caption_en
 * @property string $image_url
 * @property int $is_active 0: inactive; 1: active
 * @property string $created_date
 * @property string $updated_date
 */
class BaseSlider extends \yii\db\ActiveRecord
{
    const IS_INACTIVE   = 0;
    const IS_ACTIVE     = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'base_slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_en', 'caption', 'caption_en', 'image_url', 'updated_date'], 'required'],
            [['is_active'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['title', 'title_en'], 'string', 'max' => 56],
            [['caption', 'caption_en', 'image_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'title_en' => 'Title (English)',
            'caption' => 'Caption',
            'caption_en' => 'Caption (English)',
            'image_url' => 'Image URL',
            'is_active' => 'Is Active',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }
}

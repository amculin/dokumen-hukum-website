<?php

namespace common\models;

use Yii;

class Slider extends BaseSlider
{
    public static function getAll()
    {
        return self::find()->where(['is_active' => self::IS_ACTIVE])->all();
    }
}
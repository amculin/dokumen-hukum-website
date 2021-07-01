<?php

namespace common\models;

use Yii;

class Setting extends BaseSetting
{
    public static function get($key)
    {
        return self::findOne($key)->value;
    }
}

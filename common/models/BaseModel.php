<?php
namespace common\models;

class BaseModel extends \yii\db\ActiveRecord
{
    public function beforeValidate()
    {
        parent::beforeValidate();

        if (! $this->isNewRecord)
            $this->updated_date = date('Y-m-d H:i:s');
        else
            $this->created_date = date('Y-m-d H:i:s');

        return true;
    }
}
?>
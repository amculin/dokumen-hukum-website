<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_form".
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property int $phone_number
 * @property string $message
 * @property string $created_date
 */
class ContactForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'email', 'phone_number', 'message', 'created_date'], 'required'],
            [['phone_number'], 'integer'],
            [['message'], 'string'],
            [['created_date'], 'safe'],
            [['full_name'], 'string', 'max' => 96],
            [['email'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'message' => 'Message',
            'created_date' => 'Created Date',
        ];
    }
}

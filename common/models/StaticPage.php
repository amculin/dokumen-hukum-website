<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "static_page".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property int $author_id
 * @property int $hit
 * @property int $type 0: No; 1: Yes
 * @property int $status 0: Inactive; 1: Active;
 * @property string $meta_description
 * @property string $meta_keyword
 * @property string $created_date
 * @property string $updated_date
 */
class StaticPage extends \yii\db\ActiveRecord
{
    const NON_SERVICE = 0;
    const SERVICE = 1;

    const INACTIVE = 0;
    const ACTIVE = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'static_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'slug', 'author_id', 'meta_description', 'meta_keyword', 'created_date', 'updated_date'], 'required'],
            [['content'], 'string'],
            [['author_id', 'hit', 'type', 'status'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['title', 'slug', 'meta_description', 'meta_keyword'], 'string', 'max' => 256],
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
            'content' => 'Content',
            'slug' => 'Slug',
            'author_id' => 'Author ID',
            'hit' => 'Hit',
            'type' => 'Is Service',
            'status' => 'Status',
            'meta_description' => 'Meta Description',
            'meta_keyword' => 'Meta Keyword',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }

    public static function findBySlug($slug)
    {
        return self::find()->where([
            'slug' => $slug
        ])->one();
    }

    public static function getServices()
    {
        return self::find()->select('title, slug')->where([
            'type' => self::SERVICE,
            'status' => self::ACTIVE
        ])->all();
    }
}

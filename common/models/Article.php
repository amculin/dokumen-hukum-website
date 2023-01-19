<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property int $author_id
 * @property int $category_id
 * @property string $image_url
 * @property string $image_caption
 * @property int $hit
 * @property int $status 0: Draft; 1: Published
 * @property string|null $meta_description
 * @property string|null $meta_keyword
 * @property string $posted_date
 * @property string $created_date
 * @property string $updated_date
 *
 * @property Category $category
 * @property User $author
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'slug', 'author_id', 'category_id', 'image_url', 'image_caption', 'posted_date', 'created_date', 'updated_date'], 'required'],
            [['content'], 'string'],
            [['author_id', 'category_id', 'hit', 'status'], 'integer'],
            [['posted_date', 'created_date', 'updated_date'], 'safe'],
            [['title', 'slug', 'image_url', 'image_caption', 'meta_description', 'meta_keyword'], 'string', 'max' => 256],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
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
            'category_id' => 'Category ID',
            'image_url' => 'Image Url',
            'image_caption' => 'Image Caption',
            'hit' => 'Hit',
            'status' => 'Status',
            'meta_description' => 'Meta Description',
            'meta_keyword' => 'Meta Keyword',
            'posted_date' => 'Posted Date',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
}

<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "blog_translation".
 *
 * @property int $id
 * @property int $blog_id
 * @property string $language_code
 * @property string $title
 * @property string $content
 * @property string $author
 * @property string $category
 *
 * @property Blog $blog
 * @property Language $languageCode
 */
class BlogTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blog_id', 'language_code', 'title', 'content', 'author', 'category'], 'required'],
            [['blog_id'], 'integer'],
            [['title', 'content'], 'string'],
            [['language_code', 'category'], 'string', 'max' => 200],
            [['author'], 'string', 'max' => 128],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
            [['language_code'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_code' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_id' => 'Blog ID',
            'language_code' => 'Language Code',
            'title' => 'Title',
            'content' => 'Content',
            'author' => 'Author',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguageCode()
    {
        return $this->hasOne(Language::className(), ['code' => 'language_code']);
    }
}

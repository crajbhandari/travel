<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $date
 * @property string $title
 * @property string $image
 * @property string $content
 * @property string $author
 * @property string $category
 * @property int $visibility
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['title', 'content'], 'required'],
            [['title', 'content'], 'string'],
            [['visibility'], 'integer'],
            [['image', 'author', 'category'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'title' => 'Title',
            'image' => 'Image',
            'content' => 'Content',
            'author' => 'Author',
            'category' => 'Category',
            'visibility' => 'Visibility',
        ];
    }
}

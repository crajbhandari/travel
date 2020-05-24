<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $date
 * @property string $image
 * @property int $visibility
 *
 * @property BlogComments[] $blogComments
 * @property BlogTranslation[] $blogTranslations
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
            [['visibility'], 'integer'],
            [['image'], 'string', 'max' => 128],
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
            'image' => 'Image',
            'visibility' => 'Visibility',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogComments()
    {
        return $this->hasMany(BlogComments::className(), ['blog_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogTranslations()
    {
        return $this->hasMany(BlogTranslation::className(), ['blog_id' => 'id']);
    }
}

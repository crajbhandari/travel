<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property int $id
 * @property string $date
 * @property string $image
 * @property int $is_active
 *
 * @property BlogTranslation[] $blogTranslations
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['is_active'], 'integer'],
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
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogTranslations()
    {
        return $this->hasMany(BlogTranslation::className(), ['blog_id' => 'id']);
    }
}

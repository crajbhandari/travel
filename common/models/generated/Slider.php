<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%slider}}".
 *
 * @property int $id
 * @property int $slide_index
 * @property string $image
 * @property string $content
 * @property string $content_align
 * @property string $link
 * @property string $link_text
 * @property string $created_on
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%slider}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slide_index'], 'integer'],
            [['content'], 'string'],
            [['created_on'], 'safe'],
            [['image', 'link_text'], 'string', 'max' => 128],
            [['content_align'], 'string', 'max' => 8],
            [['link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slide_index' => 'Slide Index',
            'image' => 'Image',
            'content' => 'Content',
            'content_align' => 'Content Align',
            'link' => 'Link',
            'link_text' => 'Link Text',
            'created_on' => 'Created On',
        ];
    }
}

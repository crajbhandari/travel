<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property int $id
 * @property string $page
 * @property int $section_order
 * @property string $title
 * @property string $sub_title
 * @property string $content
 * @property string $button_text
 * @property string $button_link
 * @property string $button_position
 * @property string $image
 * @property string $image_position
 * @property string $created_on
 *
 * @property Pages $page0
 */
class   Sections extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sections';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page'], 'required'],
            [['section_order'], 'integer'],
            [['title', 'sub_title', 'content'], 'string'],
            [['created_on'], 'safe'],
            [['page', 'button_text', 'button_link'], 'string', 'max' => 255],
            [['button_position', 'image_position'], 'string', 'max' => 16],
            [['image'], 'string', 'max' => 128],
            [['page'], 'exist', 'skipOnError' => true, 'targetClass' => Pages::className(), 'targetAttribute' => ['page' => 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page' => 'Page',
            'section_order' => 'Section Order',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'content' => 'Content',
            'button_text' => 'Button Text',
            'button_link' => 'Button Link',
            'button_position' => 'Button Position',
            'image' => 'Image',
            'image_position' => 'Image Position',
            'created_on' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage0()
    {
        return $this->hasOne(Pages::className(), ['name' => 'page']);
    }
}

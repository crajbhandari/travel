<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $title
 * @property string $alt_title
 * @property string $sub_title
 * @property string $summary
 * @property string $description
 * @property string $image
 * @property string $created_on
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'created_on'], 'required'],
            [['title', 'alt_title', 'sub_title', 'summary', 'description'], 'string'],
            [['created_on'], 'safe'],
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
            'title' => 'Title',
            'alt_title' => 'Alt Title',
            'sub_title' => 'Sub Title',
            'summary' => 'Summary',
            'description' => 'Description',
            'image' => 'Image',
            'created_on' => 'Created On',
        ];
    }
}

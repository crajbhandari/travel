<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string $image
 * @property string $alt_text
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'alt_text'], 'required'],
            [['image', 'alt_text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'alt_text' => 'Alt Text',
        ];
    }
}

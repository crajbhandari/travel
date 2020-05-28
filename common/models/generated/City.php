<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property int $parent
 * @property string $images
 * @property string $created_on
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent'], 'integer'],
            [['created_on'], 'safe'],
            [['images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent' => 'Parent',
            'images' => 'Images',
            'created_on' => 'Created On',
        ];
    }
}

<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $images
 * @property string $location
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
            [['description'], 'string'],
            [['created_on'], 'safe'],
            [['name'], 'string', 'max' => 200],
            [['images', 'location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'images' => 'Images',
            'location' => 'Location',
            'created_on' => 'Created On',
        ];
    }
}

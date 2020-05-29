<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%city_translation}}".
 *
 * @property int $id
 * @property int $city_id
 * @property string $language_code
 * @property string $name
 * @property string $description
 * @property string $location
 */
class CityTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%city_translation}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id', 'language_code', 'name'], 'required'],
            [['city_id'], 'integer'],
            [['description'], 'string'],
            [['language_code', 'name'], 'string', 'max' => 200],
            [['location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'City ID',
            'language_code' => 'Language Code',
            'name' => 'Name',
            'description' => 'Description',
            'location' => 'Location',
        ];
    }
}

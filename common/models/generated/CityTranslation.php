<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "city_translation".
 *
 * @property int $id
 * @property int $city_id
 * @property string $language_code
 * @property string $name
 * @property string $description
 * @property string $location
 *
 * @property City $city
 * @property Language $languageCode
 */
class CityTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id', 'language_code', 'name', 'description', 'location'], 'required'],
            [['city_id'], 'integer'],
            [['description'], 'string'],
            [['language_code', 'name'], 'string', 'max' => 200],
            [['location'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['language_code'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_code' => 'code']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguageCode()
    {
        return $this->hasOne(Language::className(), ['code' => 'language_code']);
    }
}

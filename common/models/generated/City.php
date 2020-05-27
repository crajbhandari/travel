<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $images
 * @property string $created_on
 *
 * @property CityTranslation[] $cityTranslations
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
            'images' => 'Images',
            'created_on' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityTranslations()
    {
        return $this->hasMany(CityTranslation::className(), ['city_id' => 'id']);
    }
}

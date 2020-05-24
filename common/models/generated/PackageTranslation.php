<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "package_translation".
 *
 * @property int $id
 * @property int $package_id
 * @property string $language_code
 * @property string $title
 * @property string $itinery
 * @property string $about_tour
 * @property string $info
 * @property string $budget
 * @property string $location
 * @property string $duration
 * @property string $city
 *
 * @property Package $package
 * @property Language $languageCode
 */
class PackageTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'package_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'language_code', 'title', 'itinery', 'about_tour', 'info', 'budget', 'location', 'duration', 'city'], 'required'],
            [['package_id'], 'integer'],
            [['itinery', 'about_tour', 'info'], 'string'],
            [['language_code', 'title', 'budget', 'location', 'duration', 'city'], 'string', 'max' => 200],
            [['package_id'], 'exist', 'skipOnError' => true, 'targetClass' => Package::className(), 'targetAttribute' => ['package_id' => 'id']],
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
            'package_id' => 'Package ID',
            'language_code' => 'Language Code',
            'title' => 'Title',
            'itinery' => 'Itinery',
            'about_tour' => 'About Tour',
            'info' => 'Info',
            'budget' => 'Budget',
            'location' => 'Location',
            'duration' => 'Duration',
            'city' => 'City',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackage()
    {
        return $this->hasOne(Package::className(), ['id' => 'package_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguageCode()
    {
        return $this->hasOne(Language::className(), ['code' => 'language_code']);
    }
}

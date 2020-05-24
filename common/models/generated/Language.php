<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "language".
 *
 * @property string $code
 * @property string $name
 *
 * @property BlogTranslation[] $blogTranslations
 * @property CityTranslation[] $cityTranslations
 * @property PackageCategoryTranslation[] $packageCategoryTranslations
 * @property PackageTranslation[] $packageTranslations
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['code', 'name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogTranslations()
    {
        return $this->hasMany(BlogTranslation::className(), ['language_code' => 'code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityTranslations()
    {
        return $this->hasMany(CityTranslation::className(), ['language_code' => 'code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageCategoryTranslations()
    {
        return $this->hasMany(PackageCategoryTranslation::className(), ['lamguage_code' => 'code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageTranslations()
    {
        return $this->hasMany(PackageTranslation::className(), ['language_code' => 'code']);
    }
}

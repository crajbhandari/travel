<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "package_category".
 *
 * @property int $id
 * @property int $parent
 *
 * @property Package[] $packages
 * @property PackageCategoryTranslation[] $packageCategoryTranslations
 */
class PackageCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'package_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent'], 'integer'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackages()
    {
        return $this->hasMany(Package::className(), ['category' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageCategoryTranslations()
    {
        return $this->hasMany(PackageCategoryTranslation::className(), ['package_category_id' => 'id']);
    }
}

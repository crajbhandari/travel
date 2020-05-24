<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "package_category_translation".
 *
 * @property int $id
 * @property int $package_category_id
 * @property string $lamguage_code
 * @property string $name
 *
 * @property PackageCategory $packageCategory
 * @property Language $lamguageCode
 */
class PackageCategoryTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'package_category_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_category_id', 'lamguage_code', 'name'], 'required'],
            [['package_category_id'], 'integer'],
            [['lamguage_code', 'name'], 'string', 'max' => 200],
            [['package_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => PackageCategory::className(), 'targetAttribute' => ['package_category_id' => 'id']],
            [['lamguage_code'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['lamguage_code' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_category_id' => 'Package Category ID',
            'lamguage_code' => 'Lamguage Code',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageCategory()
    {
        return $this->hasOne(PackageCategory::className(), ['id' => 'package_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLamguageCode()
    {
        return $this->hasOne(Language::className(), ['code' => 'lamguage_code']);
    }
}

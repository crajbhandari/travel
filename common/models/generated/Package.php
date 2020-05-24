<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "package".
 *
 * @property int $id
 * @property string $images
 * @property int $visibility
 * @property int $created_by
 * @property string $created_on
 * @property int $discount
 * @property string $iframe
 * @property int $category
 * @property int $sight_seeing
 *
 * @property User $createdBy
 * @property PackageCategory $category0
 * @property PackageTranslation[] $packageTranslations
 */
class Package extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'package';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['images', 'iframe'], 'string'],
            [['visibility', 'created_by', 'discount', 'category', 'sight_seeing'], 'integer'],
            [['created_by'], 'required'],
            [['created_on'], 'safe'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => PackageCategory::className(), 'targetAttribute' => ['category' => 'id']],
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
            'visibility' => 'Visibility',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'discount' => 'Discount',
            'iframe' => 'Iframe',
            'category' => 'Category',
            'sight_seeing' => 'Sight Seeing',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(PackageCategory::className(), ['id' => 'category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageTranslations()
    {
        return $this->hasMany(PackageTranslation::className(), ['package_id' => 'id']);
    }
}

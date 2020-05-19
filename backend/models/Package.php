<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "package".
 *
 * @property int $id
 * @property string $title
 * @property string $itinerary
 * @property string $about_tour
 * @property string $info
 * @property string $budget
 * @property string $images
 * @property int $visibility
 * @property int $created_by
 * @property string $created_on
 * @property string $location
 * @property string $duration
 * @property int $discount
 * @property string $iframe
 * @property string $city
 * @property int $category
 * @property int $site_seen
 *
 * @property User $createdBy
 * @property PackageCategory $category0
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
            [['itinerary', 'about_tour', 'info', 'images', 'iframe'], 'string'],
            [['visibility', 'created_by', 'discount', 'category', 'site_seen'], 'integer'],
            [['created_by', 'location', 'duration'], 'required'],
            [['created_on'], 'safe'],
            [['title', 'budget', 'location', 'duration', 'city'], 'string', 'max' => 200],
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
            'title' => 'Title',
            'itinerary' => 'Itinerary',
            'about_tour' => 'About Tour',
            'info' => 'Info',
            'budget' => 'Budget',
            'images' => 'Images',
            'visibility' => 'Visibility',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'location' => 'Location',
            'duration' => 'Duration',
            'discount' => 'Discount',
            'iframe' => 'Iframe',
            'city' => 'City',
            'category' => 'Category',
            'site_seen' => 'Site Seen',
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
}

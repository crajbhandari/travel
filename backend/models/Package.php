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
 *
 * @property User $createdBy
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
            [['itinerary', 'info', 'images', 'iframe'], 'string'],
            [['about_tour', 'created_by', 'location', 'duration'], 'required'],
            [['visibility', 'created_by', 'discount'], 'integer'],
            [['created_on'], 'safe'],
            [['title', 'budget', 'location', 'duration', 'city'], 'string', 'max' => 200],
            [['about_tour'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
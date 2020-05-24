<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "package_review".
 *
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property string $email
 * @property string $city
 * @property string $message
 * @property int $rating
 * @property string $posted_on
 */
class PackageReview extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'package_review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'rating'], 'integer'],
            [['message'], 'string'],
            [['posted_on'], 'safe'],
            [['name', 'email', 'city'], 'string', 'max' => 200],
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
            'name' => 'Name',
            'email' => 'Email',
            'city' => 'City',
            'message' => 'Message',
            'rating' => 'Rating',
            'posted_on' => 'Posted On',
        ];
    }
}

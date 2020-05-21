<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "package_request".
 *
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property int $phone
 * @property string $email
 * @property int $no_traveller
 * @property string $departure_date
 * @property int $adult_no
 * @property int $children_no
 * @property int $max_price
 * @property int $min_price
 * @property string $city
 * @property string $message
 * @property string $posted_on
 */
class PackageRequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'package_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'phone', 'no_traveller', 'adult_no', 'children_no', 'max_price', 'min_price'], 'integer'],
            [['phone', 'departure_date'], 'required'],
            [['departure_date', 'posted_on'], 'safe'],
            [['message'], 'string'],
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
            'phone' => 'Phone',
            'email' => 'Email',
            'no_traveller' => 'No Traveller',
            'departure_date' => 'Departure Date',
            'adult_no' => 'Adult No',
            'children_no' => 'Children No',
            'max_price' => 'Max Price',
            'min_price' => 'Min Price',
            'city' => 'City',
            'message' => 'Message',
            'posted_on' => 'Posted On',
        ];
    }
}

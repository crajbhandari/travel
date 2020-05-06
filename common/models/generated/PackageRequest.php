<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%package_request}}".
 *
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property string $email
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
        return '{{%package_request}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id'], 'integer'],
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
            'posted_on' => 'Posted On',
        ];
    }
}

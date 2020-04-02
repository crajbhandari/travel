<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $position
 * @property string $email
 * @property string $phone
 * @property string $description
 * @property string $social_media
 * @property string $created_on
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'created_on'], 'required'],
            [['description', 'social_media'], 'string'],
            [['created_on'], 'safe'],
            [['image', 'email', 'phone'], 'string', 'max' => 128],
            [['name', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'name' => 'Name',
            'position' => 'Position',
            'email' => 'Email',
            'phone' => 'Phone',
            'description' => 'Description',
            'social_media' => 'Social Media',
            'created_on' => 'Created On',
        ];
    }
}

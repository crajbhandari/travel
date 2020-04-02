<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $url
 * @property string $message
 * @property int $is_new
 * @property string $created_on
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            [['message'], 'string'],
            [['is_new'], 'integer'],
            [['created_on'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255],
            [['phone', 'url'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'url' => 'Url',
            'message' => 'Message',
            'is_new' => 'Is New',
            'created_on' => 'Created On',
        ];
    }
}

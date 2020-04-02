<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $info
 * @property string $link
 * @property int $on_home
 * @property int $on_about
 * @property string $created_on
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'created_on'], 'required'],
            [['name', 'info', 'link'], 'string'],
            [['on_home', 'on_about'], 'integer'],
            [['created_on'], 'safe'],
            [['image'], 'string', 'max' => 128],
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
            'info' => 'Info',
            'link' => 'Link',
            'on_home' => 'On Home',
            'on_about' => 'On About',
            'created_on' => 'Created On',
        ];
    }
}

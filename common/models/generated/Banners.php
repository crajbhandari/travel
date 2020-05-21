<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%banners}}".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $created_on
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%banners}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'string'],
            [['created_on'], 'safe'],
            [['name'], 'string', 'max' => 200],
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
            'created_on' => 'Created On',
        ];
    }
}

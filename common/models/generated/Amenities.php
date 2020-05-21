<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "amenities".
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $icon
 * @property int $is_active
 * @property string $description
 * @property string $created _on
 * @property string $updated_on
 */
class Amenities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'amenities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['is_active'], 'integer'],
            [['description'], 'string'],
            [['created _on', 'updated_on'], 'safe'],
            [['name', 'display_name'], 'string', 'max' => 120],
            [['icon'], 'string', 'max' => 60],
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
            'display_name' => 'Display Name',
            'icon' => 'Icon',
            'is_active' => 'Is Active',
            'description' => 'Description',
            'created _on' => 'Created On',
            'updated_on' => 'Updated On',
        ];
    }
}

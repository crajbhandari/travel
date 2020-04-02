<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $name
 * @property string $label
 * @property string $image
 * @property string $icon
 * @property int $on_menu
 * @property int $is_active
 * @property string $created_on
 *
 * @property Sections[] $sections
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'label'], 'required'],
            [['on_menu', 'is_active'], 'integer'],
            [['created_on'], 'safe'],
            [['name', 'label', 'image', 'icon'], 'string', 'max' => 128],
            [['name'], 'unique'],
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
            'label' => 'Label',
            'image' => 'Image',
            'icon' => 'Icon',
            'on_menu' => 'On Menu',
            'is_active' => 'Is Active',
            'created_on' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Sections::className(), ['page' => 'name']);
    }
}

<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%package}}".
 *
 * @property int $id
 * @property string $images
 * @property int $is_active
 * @property int $created_by
 * @property string $created_on
 * @property int $discount
 * @property string $iframe
 * @property int $category
 * @property int $sight_seeing
 */
class Package extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%package}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['images', 'iframe'], 'string'],
            [['is_active', 'created_by', 'discount', 'category', 'sight_seeing'], 'integer'],
            [['created_by'], 'required'],
            [['created_on'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images' => 'Images',
            'is_active' => 'Is Active',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'discount' => 'Discount',
            'iframe' => 'Iframe',
            'category' => 'Category',
            'sight_seeing' => 'Sight Seeing',
        ];
    }
}

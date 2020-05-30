<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%package_category_translation}}".
 *
 * @property int $id
 * @property int $package_category_id
 * @property string $language_code
 * @property string $name
 */
class PackageCategoryTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%package_category_translation}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_category_id', 'language_code', 'name'], 'required'],
            [['package_category_id'], 'integer'],
            [['language_code', 'name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_category_id' => 'Package Category ID',
            'language_code' => 'Language Code',
            'name' => 'Name',
        ];
    }
}

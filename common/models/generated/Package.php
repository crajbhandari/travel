<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%package}}".
 *
 * @property int $id
 * @property string $title
 * @property string $itinerary
 * @property string $info
 * @property string $budget
 * @property int $created_by
 * @property string $created_on
 *
 * @property User $createdBy
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
            [['itinerary', 'info'], 'string'],
            [['created_by'], 'required'],
            [['created_by'], 'integer'],
            [['created_on'], 'safe'],
            [['title', 'budget'], 'string', 'max' => 200],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'itinerary' => 'Itinerary',
            'info' => 'Info',
            'budget' => 'Budget',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}

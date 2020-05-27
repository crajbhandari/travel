<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "faq_translation".
 *
 * @property int $id
 * @property int $faq_id
 * @property string $language_code
 * @property string $title
 * @property string $content
 *
 * @property Faq $faq
 * @property Language $languageCode
 */
class FaqTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['faq_id', 'language_code', 'title'], 'required'],
            [['faq_id'], 'integer'],
            [['content'], 'string'],
            [['language_code', 'title'], 'string', 'max' => 200],
            [['faq_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faq::className(), 'targetAttribute' => ['faq_id' => 'id']],
            [['language_code'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_code' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faq_id' => 'Faq ID',
            'language_code' => 'Language Code',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaq()
    {
        return $this->hasOne(Faq::className(), ['id' => 'faq_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguageCode()
    {
        return $this->hasOne(Language::className(), ['code' => 'language_code']);
    }
}

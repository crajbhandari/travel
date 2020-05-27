<?php

    namespace common\models;

    class FaqTranslation extends \common\models\generated\FaqTranslation {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [

            ];
        }
        public function getInfo()
        {
            return $this->hasOne(Faq::className(), ['id' => 'faq_id']);
        }
    }

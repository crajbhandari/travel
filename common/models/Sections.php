<?php

    namespace common\models;

    class Sections extends \common\models\generated\Sections {

        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['title', 'sub_title', 'content'], 'filter', 'filter' => 'trim'],
            ];
        }

        public function getPage() {
            return $this->hasOne(Pages::className(), ['id' => 'page_id']);
        }
    }

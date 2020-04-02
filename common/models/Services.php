<?php

    namespace common\models;

    class Services extends \common\models\generated\Services {
        /**
         * @inheritdoc
         */
        public static function tableName() {
            return 'services';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['title', 'alt_title', 'sub_title', 'summary', 'description'], 'filter', 'filter' => 'trim'],
            ];
        }

    }

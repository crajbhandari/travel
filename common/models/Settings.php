<?php

    namespace common\models;

    class Settings extends \common\models\generated\Settings {


        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['slug', 'content', 'type', 'caption'], 'filter', 'filter' => 'trim'],
                [['slug'], 'filter', 'filter' => 'strtolower'],
            ];
        }

    }

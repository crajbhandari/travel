<?php

    namespace common\models;

    class Slider extends \common\models\generated\Slider {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [
//                [['author', 'title', 'content'], 'filter', 'filter' => 'trim'],
//                [['category'], 'filter', 'filter' => 'strtolower'],
            ];
        }
    }

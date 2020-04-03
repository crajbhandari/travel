<?php

    namespace common\models;

    class Blog extends \common\models\generated\Blog {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['author', 'title', 'content'], 'filter', 'filter' => 'trim'],
                [['category'], 'filter', 'filter' => 'strtolower'],
            ];
        }
    }

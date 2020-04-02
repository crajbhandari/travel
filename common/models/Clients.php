<?php

    namespace common\models;

    class Clients extends \common\models\generated\Clients {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['name', 'link', 'info'], 'filter', 'filter' => 'trim'],
            ];
        }
    }

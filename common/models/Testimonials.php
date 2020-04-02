<?php

    namespace common\models;

    class Testimonials extends \common\models\generated\Testimonials {


        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['name', 'position', 'content', 'info'], 'filter', 'filter' => 'trim'],
            ];
        }
    }

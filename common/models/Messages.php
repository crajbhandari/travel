<?php

    namespace common\models;

    class Messages extends \common\models\generated\Messages {


        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['email'], 'filter', 'filter' => 'strtolower'],
                [['name', 'email', 'message'], 'filter', 'filter' => 'trim'],
            ];
        }


    }

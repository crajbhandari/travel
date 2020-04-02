<?php

    namespace common\models;

    class Team extends \common\models\generated\Team {

        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['name', 'description', 'position'], 'filter', 'filter' => 'trim'],
            ];
        }


    }

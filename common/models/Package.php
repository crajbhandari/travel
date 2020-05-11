<?php

    namespace common\models;

    class Package extends \common\models\generated\Package {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                    [['itinerary', 'info', 'images', 'iframe', 'about_tour'], 'string'],

            ];
        }
    }

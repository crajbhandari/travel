<?php

    namespace common\models;

    class CityTranslation extends \common\models\generated\CityTranslation {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['location', 'name', 'description'], 'filter', 'filter' => 'trim'],

            ];
        }
        public function getInfo()
        {
            return $this->hasOne(City::className(), ['id' => 'city_id']);
        }
    }

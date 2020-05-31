<?php

    namespace common\models;

    class City extends \common\models\generated\City {
        /**
         * @inheritdoc
         */
        public function rules() {
            return array_merge(Parent::rules(), [
                    [['parent'], 'integer'],
                    [['created_on'], 'safe'],
                    [['images'], 'string', 'max' => 255],

            ]);
        }

    }

<?php

    namespace common\models;

    class Banners extends \common\models\generated\Banners {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [

            ];
        }
        public function attributeLabels()
        {
            return [
                    'id' => 'ID',
                    'image' => 'Image',
                    'name' => 'Name',
                    'created_on' => 'Created On',
            ];
        }
    }

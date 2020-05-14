<?php

    namespace common\models;

    class PackageCategory extends \common\models\generated\PackageCategory {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [

            ];
        }
        public function getParent() {
            return $this->hasOne(PackageCategory::className(), ['id' => 'parent']);
        }
    }

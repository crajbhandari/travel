<?php

    namespace common\models;

    class PackageCategoryTranslation extends \common\models\generated\PackageCategoryTranslation {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [

            ];
        }
        public function getInfo()
        {
            return $this->hasOne(PackageCategory::className(), ['id' => 'package_category_id']);
        }
    }

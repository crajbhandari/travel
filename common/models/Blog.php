<?php

    namespace common\models;

    use common\models\generated\BlogTranslation;

    class Blog extends \common\models\generated\Blog {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [

            ];
        }
        public function getTranslation()
        {
            return $this->hasMany(BlogTranslation::className(), ['blog_id' => 'id']);
        }
    }

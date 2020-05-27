<?php

    namespace common\models;

    class BlogTranslation extends \common\models\generated\BlogTranslation {
        /**
         * @inheritdoc
         */
        public function rules() {
            return [
                [['author', 'title', 'content'], 'filter', 'filter' => 'trim'],
                [['category'], 'filter', 'filter' => 'strtolower'],
            ];
        }
        public function getInfo()
        {
            return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
        }
    }

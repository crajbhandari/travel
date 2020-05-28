<?php

namespace common\models;



class PackageReview extends \common\models\generated\PackageReview {
    /**
     * @inheritdoc
     */
    public function rules() {
        return [

        ];
    }
    public function getParent() {
        return $this->hasOne(PackageReview::className(), ['id' => 'parent']);
    }
}

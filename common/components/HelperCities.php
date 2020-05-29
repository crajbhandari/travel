<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of settings
 * @author Chetan Rajbhandari
 */

namespace common\components;

use common\models\Blog;
use common\models\BlogComments;
use common\models\CityTranslation;
use common\models\generated\BlogTranslation;
use common\models\City;
use common\models\Sections;
use phpDocumentor\Reflection\Types\Self_;
use yii\base\Component;

class HelperCities extends Component {
    public static function getParentName($id, $ln) {
        $model = CityTranslation::find()->where('city_id =' . $id)->andWhere(['language_code' => $ln])->asArray()->one();

        if ($model == '') {
            return false;
        }
        else {
            return $model['name'];
        }
    }

    public static function getAllCity() {
        return $model = City::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
    }

    public static function getSingleCity($id) {
        return $model = City::find()->where('id =' . $id)->asArray()->one();
    }

    public static function getSingleCity2($id) {
        return $model = CityTranslation::find()->where('city_id =' . $id)->asArray()->one();
    }

    public static function getSingleCityTranslation($id, $ln) {

        return $model = CityTranslation::find()->where('city_id =' . $id)->andwhere(['language_code' => $ln])->with('info')->asArray()->one();

    }

    public static function set($data, $image) {
        if (isset($data['id']) && $data['id'] > 0) {
            $model = City::findOne($data['id']);
        }
        else {
            $model = new City();
        }

        $model->parent = $data['parent'];
        if (isset($image['name']) && $image['name'] != '') {
            if (isset($model->image) && $model->image != '') {
                Misc::delete_file($model->image, 'image');
            }
            $upload = HelperUpload::upload($image);
            if ($upload != false) {
                $model->images = $upload;
            }
            else {
                Misc::setFlash('danger', 'Image not uploaded. Please Try again');
            }
        }
        if (!($model->save() == false)) {
            $city_translation_part = HelperCities::setCityTranslation($data, $model->id);
            if (isset($city_translation_part) && $city_translation_part != false) {
                Misc::setFlash('success', 'City Updated.');
                return $city_translation_part;
            }

            Misc::setFlash('danger', 'Data not uploaded. Something Wrong in blog-translation part');
            return false;
        }
        Misc::setFlash('danger', 'Data not uploaded. Please Try again');
        return false;
    }

    public static function checkLanguage($data) {
        return (isset($data['language']) && $data['language'] != '' ? $lnCode = HelperLanguage::getSingleLanguage($data['language']) : $lnCode = 'EN');
    }

    public static function setCityTranslation($data, $id) {


        if (isset($data['bt_id']) && !empty($data['bt_id'])) {
            $model = CityTranslation::findOne($data['bt_id']);

            $model->city_id = $id;
            $model->language_code = $data['language'];
            $model->attributes = $data;
            if (!$model->save()) {
                return false;
            }
            return $model;
        }

        else {
            foreach ($data['name'] as $a => $n) {
                $model = new CityTranslation();
                $model->city_id = $id;
                $model->language_code = $a;
                $model->name = $n;
                $model->location = $data['location'];
             }
        }

        return false;
    }


}
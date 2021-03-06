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

use common\components\HelperUpload as Upload;
use common\models\City;
use common\models\CityTranslation;
use common\models\PackageCategoryTranslation;
use common\models\generated\PackageTranslation;
use common\models\PackageCategory;
use common\models\generated\PackageRequest;
use common\models\generated\PackageReview;
use common\models\Package;
use common\models\Sections;
use phpDocumentor\Reflection\Types\Null_;
use yii\base\Component;

class HelperPackage extends Component {
    public static function getPackage($id) {
        $model = Package::find()->where('category ='.$id)->asArray()->all();
        return $model;
    }
    public static function getReviews() {
        $data = PackageReview::find()->orderBy(['id' => SORT_DESC])->all();
        return Misc::exists($data, false);
    }
    public static function getEnglishName($id)
    {
        $result = CityTranslation::find()->select('name')->where('city_id='.$id)->andWhere('language_code="EN"')->asArray()->one();
        return $result;
    }
    public static function getRatings() {
        $data = PackageReview::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
        $rating = [];
        $i = 0;
        foreach ($data as $d) {
            $package_id = $d['package_id'];
            $package_name = PackageTranslation::find()->where('package_id='.$package_id)->asArray()->one();

            if (array_key_exists($package_id, $rating)) {
                $rating[$package_id]['count']++;
                $rating[$package_id]['rating'] += $d['rating'];
            }
            else {
                $rating[$package_id] = [
                        'name'   => $package_name['title'],
                        'count'  => 1,
                        'rating' => $d['rating']
                ];
            }

        }
        return Misc::exists($rating, false);
    }

    public static function getRequest() {
        $data = PackageRequest::find()->all();
        return Misc::exists($data, false);
    }

    public static function getEnglishCategory($id)
    {
        $result = PackageCategoryTranslation::find()->select('name')->where('package_category_id='.$id)->andWhere('language_code="EN"')->asArray()->one();
        return $result;
    }
    public static function getSingleCategory($id) {
        return $model = PackageCategory::find()->where('id =' . $id)->asArray()->one();
    }
    public static function getSingleCategoryTranslation($id, $ln) {
        return $model = PackageCategoryTranslation::find()->where('package_category_id =' . $id)->andwhere(['language_code' => $ln])->with('info')->asArray()->one();
    }
    public static function getParentName($id, $ln) {
        $model = PackageCategoryTranslation::find()->where('package_category_id =' . $id)->andWhere(['language_code' => $ln])->asArray()->one();

        if ($model == '') {
            return false;
        }
        else {
            return $model['name'];
        }
    }
    public static function setCategory($data) {
        if (isset($data['id']) && $data['id'] > 0) {
            $model = PackageCategory::findOne($data['id']);
        }
        else {
            $model = new PackageCategory();
        }

        $model->parent = $data['parent'];
        if (!($model->save() == false)) {
            $category_translation = HelperPackage::setCategoryTranslation($data, $model->id);
            if (isset($category_translation) && $category_translation != false) {
                Misc::setFlash('success', 'Category Updated.');
                return $category_translation;
            }

            Misc::setFlash('danger', 'Data not uploaded. Something Wrong in Category-translation part');
            return false;
        }
        Misc::setFlash('danger', 'Data not uploaded. Please Try again');
        return false;
    }
    public static function setCategoryTranslation($data, $id) {

        if (isset($data['bt_id']) && !empty($data['bt_id'])) {
            $model = PackageCategoryTranslation::findOne($data['bt_id']);

            $model->package_category_id = $id;
            $model->language_code = $data['language'];
            $model->name = $data['name'];
            if (!$model->save()) {
                return false;
            }
            return $model;
        }

        else {
            foreach ($data['name'] as $a => $n) {
                $model = new PackageCategoryTranslation();
                $model->package_category_id = $id;
                $model->language_code = $a;
                $model->name = $n;
                if (!$model->save()) {
                    return false;
                }
            }
        }

        return false;
    }

    public static function makeJsonList($a, $column) {
        $list = [];
        foreach ($a as $b) {
            array_push($list, ucwords($b[$column]));
        }
        return json_encode($list);
    }

    public static function rearrangeFilesArray($x) {
        $co = [];
        foreach ($x as $k => $a) {
            foreach ($a as $m => $l) {
                $co[$m][$k] = $l;
            }

        }
        return $co;
    }

    public static function uploadFilesArray($x) {
        $r = [];
        $x = self::rearrangeFilesArray($x);
        foreach ($x as $c => $file) {
            if (!empty($file['name'])) {
                $up = Upload::upload($file);
                if ($up == false) {
                    return false;
                }
                $r[$c] = $up;
            }
        }
        return $r;
    }

    public static function setCity($data,$image) {
        if (isset($data['id']) && $data['id'] > 0) {
            $model = City::findOne($data['id']);
        }
        else {
            $model = new City();
        }
        $model->name = $data['name'];
        $model->description = $data['description'];
        $model->location = $data['location'];
        if (isset($image) && !empty($image['name'][0])) {
            if ($model->images == '') {
                $upload = self::uploadFilesArray($image);
                if ($upload != false) {
                    $final = json_encode($upload);
                    $model->images = $final;
                }
                else {
                    if (!($model->save() == false)) {
                        return $var = [
                                'id'    => $model->id,
                                'image' => 'Image Not Uploaded',
                                'edit'  => 1
                        ];
                    }
                    Misc::setFlash('danger', 'Data not uploaded. Please Try again');
                    return false;
                }
            }
            else {
                $upload = self::uploadFilesArray($image);
                if ($upload != false) {
                    $prev = json_decode($model->images);
                    $final = $upload;
                    array_push($upload, ...$prev);
                    $final = json_encode($upload);
                    $model->images = $final;
                }
                else {

                    if (!($model->save() == false)) {
                        Misc::setFlash('success', 'Package Updated.');
                        return $var = [
                                'id'    => $model->id,
                                'image' => 'Image Not Uploaded',
                                'edit'  => 1
                        ];
                    }
                    Misc::setFlash('danger', 'Data not uploaded. Please Try again');
                    return false;
                }
            }
        }
        if (!($model->save() == false)) {
            Misc::setFlash('success', 'Package Updated.');
            return $var = [
                    'id'    => $model->id,
                    'image' => 1,
                    'edit'  => 1
            ];
        }
        Misc::setFlash('danger', 'Data not uploaded. Please Try again');
        return false;
    }
    public static function set($data, $image, $value) {

        if (isset($data['id']) && $data['id'] > 0) {
            $model = Package::findOne($data['id']);
        }
        else {
            $model = new Package();
            $model->created_by = \Yii::$app->user->identity->id;
        }
        $city = City::find()->select('name')->where(['name' => $data['city']])->all();

        if($city ==Null)
        {
            $c = new City();
            $c->name =  $data['city'];
            $c->save();
        }


        $model->title = $data['title'];
        $model->city = $data['city'];
        $model->visibility = $data['visibility'];
        $model->sight_seeing  = $data['sight_seeing'];
        $model->itinerary = $data['itinerary'];
        $model->about_tour = $data['about'];
        $model->info = $data['info'];
        $model->budget = $data['budget'];
        $model->location = $data['location'];
        $model->discount = $data['discount'];
        $model->duration = $data['duration'];
        $model->iframe = $data['iframe'];
        if($data['category_id']!='') {
            $model->category = $data['category_id'];
        }else{
            $model->category = $data['pre_category_id'];
        }
        if (isset($image) && !empty($image['name'][0])) {
            if ($model->images == '') {
                $upload = self::uploadFilesArray($image);
                if ($upload != false) {
                    $final = json_encode($upload);
                    $model->images = $final;
                }
                else {
                    if (!($model->save() == false)) {
                        return $var = [
                                'id'    => $model->id,
                                'image' => 'Image Not Uploaded',
                                'edit'  => 1
                        ];
                    }
                    Misc::setFlash('danger', 'Data not uploaded. Please Try again');
                    return false;
                }
            }
            else {
                $upload = self::uploadFilesArray($image);
                if ($upload != false) {
                    $prev = json_decode($model->images);
                    $final = $upload;
                    array_push($upload, ...$prev);
                    $final = json_encode($upload);
                    $model->images = $final;
                }
                else {

                    if (!($model->save() == false)) {
                        Misc::setFlash('success', 'Package Updated.');
                        return $var = [
                                'id'    => $model->id,
                                'image' => 'Image Not Uploaded',
                                'edit'  => 1
                        ];
                    }
                    Misc::setFlash('danger', 'Data not uploaded. Please Try again');
                    return false;
                }
            }
        }
        if (!($model->save() == false)) {
            Misc::setFlash('success', 'Package Updated.');
            return $var = [
                    'id'    => $model->id,
                    'image' => 1,
                    'edit'  => 1
            ];
        }
        Misc::setFlash('danger', 'Data not uploaded. Please Try again');
        return false;
    }

    public static function getCount() {
        $count = Package::find()->count();
        return $count;
    }

    public static function buildCategoryList($parent, $category) {
        $html = "";
        if (isset($category['parent_cats'][$parent])) {
            $html .= "<ul>";
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                if (!isset($category['parent_cats'][$cat_id])) {
                    $html .= "<li>  <a data-id='" . $category['categories'][$cat_id]['id'] . "' href='javascript:void(0);'" .

                            ">" . $category['categories'][$cat_id]['name'] . "</a></li>";
                }
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= "<li>  <a class='has-child' data-id='" . $category['categories'][$cat_id]['id'] . "' href='javascript:void(0);'>" . $category['categories'][$cat_id]['name'] . "</a>";
                    $html .= self::buildCategoryList($cat_id, $category);
                    $html .= "</li>";
                }
            }
            $html .= "</ul>";
        }
        return $html;
    }

    public static function getCategories() {
//        $query = Query::queryAll("SELECT dc.* FROM `package_category` AS dc ORDER BY `parent` , `name`");
        $query = PackageCategory::find()->asArray()->all();
        $category = array(
                'categories'  => array(),
                'parent_cats' => array(),
        );
        foreach ($query as $row) {
            $category['categories'][$row['id']] = $row;
            $category['parent_cats'][$row['parent']][] = $row['id'];
        }
        return Misc::exists($category,FALSE);
    }
}
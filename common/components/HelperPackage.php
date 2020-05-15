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
use common\models\PackageCategory;
use common\models\generated\PackageRequest;
use common\models\generated\PackageReview;
use common\models\Package;
use common\models\Sections;
use phpDocumentor\Reflection\Types\Null_;
use yii\base\Component;

class HelperPackage extends Component {
    public static function getCities() {
        $data = Query::queryAll("SELECT DISTINCT `name` FROM `city` ORDER BY `name` ASC ");
        return Misc::exists($data, false);
    }

    public static function getReviews() {
        $data = PackageReview::find()->orderBy(['id' => SORT_DESC])->all();
        return Misc::exists($data, false);
    }

    public static function getRatings() {
        $data = PackageReview::find()->orderBy(['id' => SORT_DESC])->all();
        $rating = [];
        $i = 0;
        foreach ($data as $d) {
            $package_id = $d['package_id'];
            $package_name = Package::findOne($package_id);
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

    public static function getCategory() {
        $data = PackageCategory::find()->orderBy(['id' => SORT_DESC])->asArray()->with('parent')->all();
        return Misc::exists($data, false);
    }


    public static function setCategory($data) {
        if ($data['id'] < 1) {
            $model = new PackageCategory();
        }
        else {
            $model = PackageCategory::findOne($data['id']);
        }
        $model->name = $data['name'];
        $model->parent = $data['parent'];
        if (!$model->save()) {
            return false;
        }
        return $model;

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

    public static function setCity($data) {
        if (isset($data['id']) && $data['id'] > 0) {
            $model = City::findOne($data['id']);
        }
        else {
            $model = new City();
        }
        $model->name = $data['name'];
        if (!$model->save()) {
            return false;
        }
        return $model;
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

        $model->itinerary = $data['itinerary'];
        $model->about_tour = $data['about'];
        $model->info = $data['info'];
        $model->budget = $data['budget'];
        $model->location = $data['location'];
        $model->discount = $data['discount'];
        $model->duration = $data['duration'];
        $model->iframe = $data['iframe'];

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
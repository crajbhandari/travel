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
use common\models\Package;
use common\models\Sections;
use yii\base\Component;

class HelperPackage extends Component {
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

    public static function set($data, $image) {
        if (isset($data['id']) && $data['id'] > 0) {
            $model = Package::findOne($data['id']);
        }
        else {
            $model = new Package();
            $model->created_by = \Yii::$app->user->identity->id;
        }
        $model->visibility = $data['visibility'];
        $model->title = $data['title'];
        $model->itinerary = $data['itinerary'];
        $model->info = $data['info'];
        $model->budget = $data['budget'];

        if (isset($image) && !empty($image)) {
            if ($model->images == '') {
                $upload = self::uploadFilesArray($image);
                if ($upload != false) {
                    $final = json_encode($upload);
                    $model->images = $final;
                }
                else{
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
}
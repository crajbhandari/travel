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

    use common\models\Pages;
    use common\models\Sections;
    use yii\base\Component;

    class HelperSections extends Component {
        public static function set($data, $image) {

            if (isset($data['id']) && $data['id'] != '') {
                $model = Sections::findOne($data['id']);
            }
            else {
                $model = new Sections;

            }
            $model->attributes = $data;
            if (isset($image['name']) && $image['name'] != '') {
                if ($model->image != '') {
                    Misc::delete_file($model->image, 'image');
                }

                $upload = HelperUpload::upload($image);
                if ($upload != FALSE) {
                    $model->image = $upload;
                }

                else {
                    Misc::setFlash('danger', 'Image not uploaded. Please Try again');
                }
            }
            if (!($model->save() == FALSE)) {

                Misc::setFlash('success', 'Section Updated.');

                return $model;
            }
echo '<pre>';
print_r($model->getErrors());
echo '</pre>';
die;
            Misc::setFlash('danger', 'Data not uploaded. Please Try again');
            return FALSE;

        }
        public static function setPage($data, $image) {

            if (isset($data['id']) && $data['id'] != '') {

                $model = Pages::findOne($data['id']);

            }
            else {
                $model = new Pages;
            }

            $model->name = (isset($data['name']) && $data['name'] != '') ? $data['name'] :$model->name;
            $model->label=(isset($data['label']) && $data['label'] != '') ? $data['label'] :$model->label;
              $model->icon= (isset($data['icon']) && $data['icon'] != '') ? $data['icon'] :$model->icon;
              $model->on_menu = (isset($data['on_menu']) && $data['on_menu'] != '') ? $data['on_menu'] :$model->on_menu;
              $model->is_active= (isset($data['is_active']) && $data['is_active'] != '') ? $data['is_active'] :$model->is_active;
            if (isset($image['name']) && $image['name'] != '') {
                if ($model->image != '') {
                    Misc::delete_file($model->image, 'image');
                }
                $upload = HelperUpload::upload($image);
                if ($upload != FALSE) {
                    $model->image = $upload;
                }

                else {
                    Misc::setFlash('danger', 'Image not uploaded. Please Try again');
                }
            }
            if (!($model->save() == FALSE)) {

                Misc::setFlash('success', 'Section Updated.');
                return $model;
            }
            echo '<pre>';
            print_r($model->getErrors());
            echo '</pre>';
            die;
            Misc::setFlash('danger', 'Data not uploaded. Please Try again');
            return FALSE;

        }
    }
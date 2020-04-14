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

    use common\models\Package;
    use common\models\Sections;
    use yii\base\Component;

    class HelperPackage extends Component {
        public static function set($data) {
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


//            if (isset($image['name']) && $image['name'] != '') {
//                if ($model->image != '') {
//                    Misc::delete_file($model->image, 'image');
//                }
//
//                $upload = HelperUpload::upload($image);
//                if ($upload != FALSE) {
//                    $model->image = $upload;
//                }
//                else {
//                    Misc::setFlash('danger', 'Image not uploaded. Please Try again');
//                }
//            }
            if (!($model->save() == FALSE)) {
                Misc::setFlash('success', 'Package Post Updated.');
                return $model;
            }
            Misc::setFlash('danger', 'Data not uploaded. Please Try again');
            return FALSE;
        }
        public static function getCount(){
            $count = Package::find()->count();
            return $count;
        }
    }
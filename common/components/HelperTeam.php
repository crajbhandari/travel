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

    use common\models\Team;
    use yii\base\Component;

    class HelperTeam extends Component {
        public static function set($data, $image) {
            if (isset($data['id']) && $data['id'] > 0) {
                $model = Team::findOne($data['id']);
            }
            else {
                $model = new Team;
            }
            $model->attributes = $data;
            $model->phone = (isset($data['phone']) && $data['phone']) ? $data['phone'] : '';
            $model->email = (isset($data['email']) && $data['email']) ? $data['email'] : '';
            if (isset($data['social']) && is_array($data['social']) && count($data['social']) > 0) {
                $model->social_media = json_encode($data['social']);
            }
            else {
                $model->social_media = '';
            }
            if (isset($image['name']) && $image['name'] != '') {
                if ($model->image != '') {
                    Misc::delete_file($model->image, 'image');
                }
                $upload = HelperUpload::upload($image);
                if ($upload != FALSE) {
                    $model->image = $upload;
                }
                else {
                    Misc::setFlash('danger', 'image not uploaded. Please Try again');
                }
            }
            if (!($model->save() == FALSE)) {
                return $model;
            }
            Misc::setFlash('danger', 'Data not uploaded. Please Try again');
            return FALSE;
        }
    }
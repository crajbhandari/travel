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

    use common\models\Amenities;
    use yii\base\Component;

    class HelperAmenities extends Component {
        public static function set($data) {
            if (isset($data['id']) && $data['id'] > 0) {
                $model = Amenities::findOne($data['id']);
            }
            else {
                $model = new Amenities;
            }
            $model->name = $data['name'];
            $model->display_name = $data['display_name'];
            $model->icon = $data['icon'];
            $model->description  = $data['info'];
            $model->is_active  = $data['is_active'];


            if (!($model->save() == FALSE)) {
                return $model;
            }
            Misc::setFlash('danger', 'Data not uploaded. Please Try again');
            return FALSE;
        }
    }
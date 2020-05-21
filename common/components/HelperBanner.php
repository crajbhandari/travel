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

    use common\models\generated\Banners;
    use common\models\Slider;
    use common\models\Team;
    use Yii;
    use yii\base\Component;

    class HelperBanner extends Component {
        public static function set($data, $image) {

            if (isset($data['id']) && $data['id'] > 0) {
                $model = Banners::findOne($data['id']);
            }
            else {
                $model = new Banners();
            }
            $model->alt_text  = $data['alt_text'];
            if (isset($image['name']) && $image['name'] != '') {
                if ($model->image != '') {
                    Misc::delete_file($model->image, 'image');
                }
                $upload = HelperUpload::upload($image,Yii::$app->params['upload_path']['banners']);
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
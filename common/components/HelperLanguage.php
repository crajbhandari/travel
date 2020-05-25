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

    use common\models\Faq;
    use common\models\generated\Language;
    use yii\base\Component;

    class HelperLanguage extends Component {
        public static function set($data) {
            if (isset($data['id']) && $data['id'] > 0) {
                $model = Faq::findOne($data['id']);
                $model->updated_by=\Yii::$app->user->identity->id;
            }
            else {
                $model = new Faq;
                $model->created_by = \Yii::$app->user->identity->id;
            }
            $model->title = $data['title'];
            $model->content = $data['content'];
            $model->is_active = $data['is_active'];
            if (!($model->save() == FALSE)) {
                return $model;
            }else{
                echo '<pre>';
                print_r($model->getErrors());
                echo '</pre>';
                die;
            }
            Misc::setFlash('danger', 'Data not uploaded. Please Try again');
            return FALSE;
        }


        public static function getAllLanguage() {
            $model = Language::find()->asArray()->all();
            return $model;
        }
        public static function getSingleLanguage($data) {
            $model = Language::find()->where(['name' => $data])->asArray()->one();
            return  $model['code'];
        }
        public static function getSingleLanguageName($data) {
            $model = Language::find()->where(['code' => $data])->asArray()->one();
            return  $model['name'];
        }
    }
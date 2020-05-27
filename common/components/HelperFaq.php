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
    use common\models\generated\FaqTranslation;
    use yii\base\Component;

    class HelperFaq extends Component {
        public static function set($data, $image) {
            if (isset($data['id']) && $data['id'] > 0) {
                $model = Faq::findOne($data['id']);
                $model->updated_by= \Yii::$app->user->identity->id;
            }
            else {
                $model = new Faq();
            }

            $model->is_active = $data['is_active'];
            $model->created_by= \Yii::$app->user->identity->id;
//image upload
            //            if (isset($image['name']) && $image['name'] != '') {
//                if ($model->image != '') {
//                    Misc::delete_file($model->image, 'image');
//                }
//                $upload = HelperUpload::upload($image);
//                if ($upload != false) {
//                    $model->image = $upload;
//                }
//                else {
//                    Misc::setFlash('danger', 'Image not uploaded. Please Try again');
//                }
//            }
            if (!($model->save() == false)) {
                $blog_faq_part = HelperFaq::setFaqTranslation($data, $model->id);
                if ( isset($blog_faq_part) && $blog_faq_part!=false) {
                    Misc::setFlash('success', 'Blog Post Updated.');
                    return $blog_faq_part;
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

        public static function setFaqTranslation($data, $id) {
            if (isset($data['bt_id']) && !empty($data['bt_id'])) {
                $model = FaqTranslation::findOne($data['bt_id']);
                if($model->language_code != $data['language']) {
                    $model = new FaqTranslation();
                }
            }

            else {
                $model = new FaqTranslation();
            }
            //check language
            $ln_code = HelperBlog::checkLanguage($data);
            $model->faq_id = $id;
            $model->language_code = $ln_code;
            $model->attributes = $data;
            if ($model->save()) {

                return $model;
            }else{
                print_r($model->getErrors());
            }

            return false;
        }
        public static function getSingleFaq($id) {
            return   $model = Faq::find()->where('id =' . $id)->asArray()->one();
        }
        public static function getSingleFaq2($id) {
            return  $model = FaqTranslation::find()->where('faq_id =' . $id)->asArray()->one();
        }
        public static function getSingleFaqTranslation($id,$ln) {
            return  $model = FaqTranslation::find()->where('faq_id =' . $id)->andwhere(['language_code' => $ln])->asArray()->one();

        }
    }
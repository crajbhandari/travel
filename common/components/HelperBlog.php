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

    use common\models\Blog;
    use common\models\Sections;
    use yii\base\Component;

    class HelperBlog extends Component {
        public static function set($data, $image) {
            if (isset($data['id']) && $data['id'] > 0) {
                $model = Blog::findOne($data['id']);
            }
            else {
                $model = new Blog();
            }
            $model->attributes = $data;
            $model->status = $data['status'];


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
                Misc::setFlash('success', 'Blog Post Updated.');
                return $model;
            }
            Misc::setFlash('danger', 'Data not uploaded. Please Try again');
            return FALSE;
        }
        public static function getCount(){
            $count = Blog::find()->count();
            return $count;
        }
    }
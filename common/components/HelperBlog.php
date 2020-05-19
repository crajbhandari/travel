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
    use common\models\BlogComments;
    use common\models\Sections;
    use yii\base\Component;

    class HelperBlog extends Component {
        public static function getAllBlogs()
        {
       return  Blog::find()->where(['visibility =1'])->orderBy('date',ASC)->all();
        }
        public static function set($data, $image) {
            if (isset($data['id']) && $data['id'] > 0) {
                $model = Blog::findOne($data['id']);
            }
            else {
                $model = new Blog();
            }
            $model->attributes = $data;
            $model->visibility = $data['visibility'];


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
        public static function getComments() {
           $comments =  BlogComments::find()
                                    ->orderBy(['id' => SORT_DESC])
                                    ->asArray()
                                    ->with('user')
                                    ->with('blog')
                                    ->all();
            return $comments;
        }
        public static function getSingleComment($id) {
            $actions = BlogComments::find()
                                   ->where(['id' => $id])
                                   ->with('blog')
                                   ->with('user')
                                   ->with('verifieduser')
                                   ->asArray()
                                   ->one();
            return $actions;
        }
        public static function verifyComment($verify) {
            $id = $verify['id'];
            $model = BlogComments::findOne($id);
            //verification comment
            $model->verification_comment = $verify['verification_comment'];
            //edited status
            $model->edited_status = 1;
            //verification status
            $model->is_verified = $verify['is_active'];
            //Verified on
            $model->verified_on = date('Y-m-d H:i:s');
            //Verified by
            $model->verified_by = \Yii::$app->user->identity->id;

            if ($model->save()) {
                return $model->id;
            }
            else {
                return false;
            }


        }
public static function getSingleBlog($id) {
   return  $model = Blog::find()->where('id ='.$id)->asArray()->one();
        }


    }
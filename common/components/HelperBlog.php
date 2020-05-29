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
use common\models\generated\BlogTranslation;
use common\models\Sections;
use phpDocumentor\Reflection\Types\Self_;
use yii\base\Component;

class HelperBlog extends Component {
    public static function getEnglishBlog() {
       $model = BlogTranslation::find() ->where(['language_code' => 'EN'])->asArray()->all();
    return $model;
    }

    public static function set($data, $image) {
        if (isset($data['id']) && $data['id'] > 0) {
            $model = Blog::findOne($data['id']);
        }
        else {
            $model = new Blog();
        }
echo '<pre>';
print_r($model);
echo '</pre>';
die;
        $model->visibility = $data['visibility'];
        if (isset($image['name']) && $image['name'] != '') {
            if ($model->image != '') {
                Misc::delete_file($model->image, 'image');
            }
            $upload = HelperUpload::upload($image);
            if ($upload != false) {
                $model->image = $upload;
            }
            else {
                Misc::setFlash('danger', 'Image not uploaded. Please Try again');
            }
        }
        if (!($model->save() == false)) {
            $blog_translation_part = HelperBlog::setBLogTranslation($data, $model->id);
            if ( isset($blog_translation_part) && $blog_translation_part!=false) {
                Misc::setFlash('success', 'Blog Post Updated.');
                return $blog_translation_part;
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

    public static function setBlogTranslation($data, $id) {
        if (isset($data['bt_id']) && !empty($data['bt_id'])) {
            $model = BlogTranslation::findOne($data['bt_id']);
            if($model->language_code != $data['language']) {
                $model = new BlogTranslation();
            }
        }

        else {
            $model = new BlogTranslation();
        }
        //check language
        $ln_code = HelperBlog::checkLanguage($data);
        $model->blog_id = $id;
        $model->language_code = $ln_code;
        $model->attributes = $data;
        if ($model->save()) {

            return $model;
        }else{
            print_r($model->getErrors());
        }

        return false;
    }

    public static function getCount() {
        $count = Blog::find()->count();
        return $count;
    }

    public static function getComments() {
        $comments = BlogComments::find()
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
     return   $model = Blog::find()->where('id =' . $id)->asArray()->one();
    }
    public static function getSingleBlog2($id) {
      return  $model = BlogTranslation::find()->where('blog_id =' . $id)->asArray()->one();
    }
    public static function getSingleBlogTranslation($id,$ln) {
        return  $model = BlogTranslation::find()->where('blog_id =' . $id)->andwhere(['language_code' => $ln])->asArray()->one();
    }
    public static function getSingleBlogTranslation2($id,$ln) {
        return  $model = \common\models\BlogTranslation::find()->where('blog_id =' . $id)->andwhere(['language_code' => $ln])->with('info')->asArray()->one();
    }
}
<?php

namespace backend\controllers;

use common\components\HelperBlog;
use common\components\HelperLanguage;
use common\components\Misc;
use common\models\Blog;
use common\models\BlogComments;
use common\models\BlogTranslation;
use common\models\Language;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;


/**
 * Clients controller
 */
class BlogController extends Controller {
    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
                'access' => [
                        'class' => AccessControl::className(),

                        'rules' => [
                                [
                                        'actions' => ['login', 'error'],
                                        'allow'   => true,
                                ],
                                [
                                    //                            'actions' => ['logout', 'index'], // Enable for access
                                    'allow' => true,
                                    'roles' => ['@'],
                                ],
                        ],
                ],
                'verbs'  => [
                        'class'   => VerbFilter::className(),
                        'actions' => [
                            //                    'logout' => ['post'],
                        ],
                ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
                'error' => [
                        'class'  => 'yii\web\ErrorAction',
                        'layout' => 'error',
                ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex() {

        $blog =BlogTranslation::find()->orderBy(['id' => SORT_DESC])->asArray()->with('info')->all();
        $page = 'blog';
//        $blog = Blog::find()->orderBy(['id' => SORT_DESC])->with('translation')->asArray()->all();
        $language = Language::find()->asArray()->all();
//       $englishBlog = HelperBlog::getEnglishBlog();
        return $this->render('index', [
                'language' =>$language,
                'blog' => $blog,
                'page' => Yii::$app->params['pages'][$page],
        ]);
    }

//    public function actionPost($id = '') {
//        $post = [];
//        $post2 = [];
//        if ($id != '') {
//            $id = Misc::decodeUrl($id);
//            $post = HelperBlog::getSingleBlog($id);
//            $post2 = HelperBlog::getSingleBlog2($id);
//        }
//
//        return $this->render('form', [
//                'editable' => $post,
//                'editable2' =>$post2,
//                'language' => HelperLanguage::getAllLanguage(),
//        ]);
//    }
    public function actionPost($id = '') {

        $post = [];
        $post2 = [];
        $ln_code ='';
        if ($id != '') {
            $id = Misc::decrypt($id);
           $explode = explode('-',$id);
           $ln_code=$explode[0];
           $id=$explode[1];
            $post = HelperBlog::getSingleBlogTranslation($id,$ln_code);
            $post2 = HelperBlog::getSingleBlog($id);
        }
        return $this->render('form', [
                'editable' => $post2,
                'editable2' =>$post,
                'all_language' => HelperLanguage::getAllLanguage(),
                'language' =>$ln_code
        ]);
    }


    public function actionComment() {
        $page = 'blog';
        $blog = HelperBlog::getComments();
        return $this->render('comment/index.php', array(
                'blog' => $blog,
                'page' => Yii::$app->params['pages'][$page],
        ));
    }
    public function actionViewComment($id) {
        $id = Misc::decodeUrl($id);
        $comment = HelperBlog::getSingleComment($id);
        return $this->render('comment/form',
                             [
                                     'comment' => $comment
                             ]
        );
    }
    public function actionPostComment() {
        if (isset($_POST['post'])) {
            $verify = HelperBlog::verifyComment($_POST['post']);
        }
        return $this->redirect(Yii::$app->request->baseUrl . '/blog/view-comment/' . Misc::encodeUrl($verify));
    }
    public function actionUpdate() {
        $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
        if (isset($_POST['post'])) {
            $updated = HelperBlog::set($_POST['post'], $image);
            if ($updated != false) {
                return $this->redirect(Yii::$app->request->baseUrl . '/blog/post/' . Misc::encrypt($updated['language_code'].'-'.$updated['blog_id']));
            }
        }
        return $this->redirect(Yii::$app->request->baseUrl . '/blog/');
    }


}

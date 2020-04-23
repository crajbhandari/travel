<?php

namespace backend\controllers;

use common\components\HelperBlog;
use common\components\Misc;
use common\models\Blog;
use common\models\BlogComments;
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
        $page = 'blog';
        $blog = Blog::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('index', [
                'blog' => $blog,
                'page' => Yii::$app->params['pages'][$page],
        ]);
    }

    public function actionPost($id = '') {
        $post = [];
        if ($id != '') {
            $id = Misc::decodeUrl($id);
            $post = Blog::findOne($id);
        }
        return $this->render('form', [
                'editable' => $post,
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
                return $this->redirect(Yii::$app->request->baseUrl . '/blog/post/' . Misc::encodeUrl($updated['id']));
            }
        }
        return $this->redirect(Yii::$app->request->baseUrl . '/blog/');
    }


}

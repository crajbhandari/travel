<?php

namespace frontend\controllers;

use common\components\HelperBlog;
use common\components\Misc;
use common\models\Blog;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Blog controller
 */
class BlogController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
                'access' => [
                        'class' => AccessControl::className(),
                        'only'  => ['logout', 'signup'],
                        'rules' => [
                                [
                                        'actions' => ['signup'],
                                        'allow'   => true,
                                        'roles'   => ['?'],
                                ],
                                [
                                        'actions' => ['logout'],
                                        'allow'   => true,
                                        'roles'   => ['@'],
                                ],
                        ],
                ],
                'verbs'  => [
                        'class'   => VerbFilter::className(),
                        'actions' => [
                                'logout' => ['post'],
                        ],
                ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeAction($action) {

        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
                'error'   => [
                        'class' => 'yii\web\ErrorAction',
                ],
                'captcha' => [
                        'class'           => 'yii\captcha\CaptchaAction',
                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                ],
        ];
    }
    /**
     * Displays homepage.
     * @return mixed
     */
    public function actionIndex() {
        $page = 'blog';
        $blog = Blog::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('index', [
                'blogs' => $blog,
                'page' => Yii::$app->params['pages'][$page],
        ]);
    }

    public function actionPost($id = '') {
        if($id != '') {
          $blog = HelperBlog::getSingleBlog(Misc::decrypt($id));
        }
        return $this->render('post',[
                'blog' => $blog,
        ]);
    }
}

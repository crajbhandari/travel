<?php

namespace frontend\controllers;

use common\components\HelperBlog;
use common\components\Misc;
use common\models\Blog;
use common\models\BlogTranslation;
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
        $session['language'] = 'FR';
        $ln = $session['language'];
        $blog = [];
            if(Yii::$app->params['site-settings']['show_blog']['content'] == 1) {
                $blog = \common\models\BlogTranslation::find()->where(['language_code' => $session['language']])->orderBy(['id' => SORT_DESC])->asArray()->with('info')->all();
        }
        return $this->render('index', [
                'blogs' => $blog,
                'page' => Yii::$app->params['pages'][$page],
        ]);
    }

    public function actionPost($id = '') {
        if($id != '') {
            $id=Misc::decrypt($id);
            $session['language'] = 'FR';
            $ln = $session['language'];
            $blog = [];
                $blog= HelperBlog::getSingleBlogTranslation2($id,$ln);

        }
        return $this->render('post',[
                'blog' => $blog,
        ]);
    }
}

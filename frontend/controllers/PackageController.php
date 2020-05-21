<?php

namespace frontend\controllers;

use common\components\Helper;
use common\components\HelperPackage;
use common\components\Misc;
use common\models\Blog;
use common\models\generated\Package;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Blog controller
 */
class PackageController extends Controller {

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
    public function actionFamily() {
        return $this->render('family');
    }

    public function actionDetail($id='') {

    }
     public function actionActivity() {
        return $this->render('activity');
    }
       public function actionIndex($id='') {
           if(!empty($id))
           {
               $id=Misc::decrypt($id);
           }
           $package = HelperPackage::getPackage($id);
           $cat = HelperPackage::getSingleCategory($id);
           return $this->render('all',[
                   'package' =>$package,
                   'cat' =>$cat
           ]);
    }
     public function actionRequest() {
        return $this->render('request');
    }
     public function actionBook() {
        return $this->render('book');
    }
}

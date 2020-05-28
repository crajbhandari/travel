<?php

namespace backend\controllers;

use Codeception\Lib\Generator\Helper;
use common\components\HelperBlog;
use common\components\Misc;
use common\models\Blog;
use common\models\BlogComments;
use common\models\PackageCategory;
use common\models\Sections;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;


/**
 * Clients controller
 */
class ContentController extends Controller {
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
    public function actionHome() {
        $page = 'home';
        $content = Sections::find()->where('page = "' . $page . '"')->all();
        return $this->render('home', [
                'page'    => $page,
                'content' => (isset($content)) ? $content : [],
        ]);
    }

    public function actionFetchCategories() {
        $categories = [];
        if (Yii::$app->request->isAjax && Yii::$app->request->post('type')) {
            if (Yii::$app->request->post('type') === 'package') {
                $list = PackageCategory::find()->asArray()->orderBy('parent')->all();
            }
            $categories = Misc::buildTree($list);
        }

        return json_encode($categories);
        /* return json_encode([
                                    'national'             => [
                                            'details'  => ['id'=>2, 'title' => 'national'],
                                            'children' => [
                                                    '0' => [
                                                            'details'  => ['id'=>5, 'title' => 'national'],
                                                            'children' => [
                                                                    '0' => [
                                                                            'details'  => ['id', 'title' => 'national'],
                                                                            'children' => [

                                                                            ]
                                                                    ],
                                                            ]
                                                    ],
                                            ]
                                    ],


                            ]);*/
    }

    public function actionPage($page) {
        $this->render('page');
        return;
    }


}

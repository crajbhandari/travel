<?php

namespace backend\controllers;

use common\components\HelperBanner;
use common\components\HelperSlider;
use common\components\Misc;
use common\models\generated\Banners;
use common\models\Slider;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;


/**
 * Clients controller
 */
class SliderController extends Controller {
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
        $page = 'slider';
        $slider = Slider::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('index', [
                'slider' => $slider,
        ]);
    }

    public function actionBanner($id = '') {
        $page = 'banners';
        if ($id != '') {
            $id = Misc::decrypt($id);
        }
        $editable = Banners::find()->where(['id'=>$id])->asArray()->one();
        $banner = Banners::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $this->render('banner', [
                'editable' => $editable,
                'banners'  => $banner
        ]);
    }

    public function actionSetBanner() {
        $post = $_POST['post'];
        $model = HelperBanner::set($post, $_FILES['image']);
        if ($model == true) {
            return $this->redirect(Yii::$app->request->baseUrl . '/slider/banner/' . Misc::encrypt($model['id']));
        }
        die;
    }


    public function actionPost($id = '') {
        $post = [];
        if ($id != '') {
            $id = Misc::decodeUrl($id);
            $post = Slider::findOne($id);
        }
        return $this->render('form', [
                'editable' => $post,
        ]);
    }

    public function actionUpdate() {
        $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
        if (isset($_POST['post'])) {
            $updated = HelperSlider::set($_POST['post'], $image);
            if ($updated != false) {
                return $this->redirect(Yii::$app->request->baseUrl . '/slider/post/' . Misc::encodeUrl($updated['id']));
            }
        }
        return $this->redirect(Yii::$app->request->baseUrl . '/slider/');
    }


}

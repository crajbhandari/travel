<?php

namespace backend\controllers;

use common\components\HelperPackage;
use common\components\Misc;
use common\models\Package;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\base\Component;


/**
 * Clients controller
 */
class PackageController extends Controller {
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
        $page = 'package';
        $package = Package::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('index', [
                'package' => $package,
        ]);
    }

    public function actionPost($id = '') {
        $post = [];
        if ($id != '') {
            $id = Misc::decodeUrl($id);
            $post = Package::findOne($id);
        }
        return $this->render('form', [
                'editable' => $post,
        ]);
    }

    public function actionUpdate() {
        $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
        if (isset($_POST['post'])) {
            $updated = HelperPackage::set($_POST['post'], $image);
            if ($updated != false) {
                if (isset($updated['image']) && $updated['image'] != 1) {
                    Misc::setFlash('danger', $updated['image'] . '. Please Try again');
                    return $this->redirect(Yii::$app->request->baseUrl . '/package/post/' . Misc::encodeUrl($updated['id']));
                }
                return $this->redirect(Yii::$app->request->baseUrl . '/package/post/' . Misc::encodeUrl($updated['id']));
            }
        }
        return $this->redirect(Yii::$app->request->baseUrl . '/package/');
    }

    public function actionRemoveImage() {
        if (\Yii::$app->request->isAjax) {
            $id = $_POST['id'];
            $index = $_POST['index'];
            if ($id > 0) {
                $model = Package::findOne($id);
                if ($model) {
                    $images = json_decode($model->images);
                    array_splice($images, $index, 1);
                    $images = json_encode($images);
                    $model->images = $images;
                    if ($model->save() == true) {
                        return true;
                    }

                }
                return false;
            }

        }
        else {
            echo 'no';
        }
        return false;
    }
}

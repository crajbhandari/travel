<?php

namespace backend\controllers;

use common\components\Helper;
use common\components\Misc;
use common\models\LoginForm;
use common\models\Messages;
use common\models\Package;
use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller {
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
                                    //                            'actions' => ['logout', 'index'],
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
     * Displays homepage.
     * @return string
     */
    public function actionIndex() {

        return $this->render('index', [
                'messages' => Messages::find()
                                      ->where(['=', 'is_new', '1'])
                                      ->count(),
                'package' => Package::find()
                                      ->count(),
        ]);
    }

    /**
     * Login action.
     * @return string
     */
    public function actionLogin() {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        else {
            $model->password = '';

            return $this->render('login', [
                    'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     * @return string
     */
    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionDashboard(){
        $user_id = Yii::$app->user->identity->id;
        $editable = User::getUserDetails($user_id);
        return $this->render('dashboard', [
                'editable' => $editable,
        ]);
    }
    public  function actionUpdateDashboard() {
        if (isset($_POST['post'])) {
            $updated = Helper::setUser($_POST['post']);
            if ($updated != FALSE) {
                Misc::setFlash('success', 'Details Updated.');
                return $this->redirect(Yii::$app->request->baseUrl . '/site/dashboard/');
            }
        }
        Misc::setFlash('danger', 'Data not uploaded. Please Try again');
        return $this->redirect(Yii::$app->request->baseUrl . '/site/dashboard');
            }
    public function actionRemoveImage() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (Yii::$app->request->isAjax && $_POST['tab'] && $_POST['id']) {
            $model_name = 'common\models\\' . $_POST['tab'];
            $model = $model_name::findOne(Misc::decodeUrl($_POST['id']));
            if (isset($model->image) && $model->image != '') {
                if (Misc::delete_file($model->image, 'image')) {
                    $model->image = '';
                    if ($model->save() == true) {
                        return true;
                    }
                };
            }
        }
        return false;
    }

    public function actionDeleteItem() {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if ($_POST['id'] != '' && Misc::decodeUrl($_POST['id']) > 0 && $_POST['table'] != '') {
            $model_name = 'common\models\\' . $_POST['table'];
            $id = Misc::decodeUrl($_POST['id']);
            $model = $model_name::findOne($id);

            if ($model) {
                if (isset($model->image) && $model->image != '') {
                    Misc::delete_file($model->image, 'image');
                }
                if ($model->delete() == true) {
                    return true;
                }
            }
        }
        return false;
    }

    public function actionDeleteAll() {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $_POST;
        if (Yii::$app->request->isAjax && $_POST['ids'] != '' && $_POST['table'] != '') {
            $ids = json_decode($_POST['ids']);
            print_r($ids);
            foreach ($ids as $k => $id) {
                $ids[$k] = Misc::decodeUrl($id);
            }
            $model_name = 'common\models\\' . $_POST['table'];
            $id = Misc::decodeUrl($_POST['ids']);
            $model = $model_name::find()
                                ->where(['in', 'id', $ids])
                                ->all();
            return $model;
            die;
            if ($model) {
                if (isset($model->image) && $model->image != '') {
                    Misc::delete_file($model->image, 'image');
                }
                if ($model->delete() == true) {
                    return true;
                }
            }
        }
        return false;
    }
    public function actionStatusChange()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if ($_POST['id'] != '' && Misc::decodeUrl($_POST['id']) > 0 && $_POST['table'] != '') {
            $model_name = 'common\models\\' . $_POST['table'];
            $id = Misc::decodeUrl($_POST['id']);
            $model = $model_name::findOne($id);

            if ($model->is_active == 0) {

                    $model->is_active= 1;
                    $model->updated_at= date('Y-m-d H:i:s');

                }
            else{  $model->is_active=0;
                $model->updated_at= date('Y-m-d H:i:s');}
                if ($model->save() == true) {

                    return true;
                }
            }

        return false;
    }
}

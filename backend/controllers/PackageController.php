<?php

namespace backend\controllers;

use common\components\Helper;
use common\components\HelperPackage;
use common\components\Misc;
use common\models\City;
use common\models\generated\PackageRequest;
use common\models\generated\PackageReview;
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
                'city' => HelperPackage::makeJsonList(HelperPackage::getCities(), 'name'),
                'editable' => $post,
        ]);
    }

    public function actionUpdate() {
        $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
        $value = Yii::$app->request->post();

        if (isset($_POST['post'])) {
            $updated = HelperPackage::set($_POST['post'], $image,$value);
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

    public function actionCities($id = '') {
        $id = Misc::decodeUrl($id);
        $page = 'cities';
        $cities = City::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $this->render('cities/index.php', [
                'cities'   => $cities,
                'editable' => ($id > 0) ? City::findOne($id) : false,
        ]);
    }

    public function actionUpdateCity() {
        if (isset($_POST['post'])) {
            $updated = HelperPackage::setCity($_POST['post']);
            if ($updated != false) {
                Misc::setFlash('success', 'City Updated');
                return $this->redirect(Yii::$app->request->baseUrl . '/package/cities/');
            }
        }
        Misc::setFlash('danger', 'City Updated Error');
        return $this->redirect(Yii::$app->request->baseUrl . '/package/cities/');
    }
    public function actionReview(){

        return $this->render('review/index',['packages'=>HelperPackage::getReviews()]);
    }
    public function actionRequest(){

        return $this->render('request/index',['packages'=>HelperPackage::getRequest()]);
    }

    public function actionReadPackage() {
        //        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (\Yii::$app->request->isAjax && $_POST['id']) {
            $id = $_POST['id'];
            if ($id > 0) {
                $model = PackageReview::findOne($id);

                if ($model) {

                    $name = $model->name;
                    $email = $model->email;
                    $city = $model->city;
                    $message = $model->message;
                    $rating = $model->rating;
                    $date = $model->posted_on;

                    if ($model->save() == true) {

                        $result = "
          <p><b>Name : </b><br>$name</p>
      <p><b>Email : </b><br>$email</p>
     <p><b>City : </b><br>$city</p>
     <p><b>Rating : </b><br>$rating</p>
      <p><b>Sent On : </b><br>$date</p>
      <p><b>Message : </b><br>$message</p>
                       
                        ";
                        return json_encode($data = [
                                'result' => $result,
                                'id'     => $model->id
                        ]);
                    }
                }
            }

        }
        return false;
    }
    public function actionRequestPackage() {
        //        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (\Yii::$app->request->isAjax && $_POST['id']) {
            $id = $_POST['id'];
            if ($id > 0) {
                $model = PackageRequest::findOne($id);

                if ($model) {

                    $name = $model->name;
                    $email = $model->email;
                    $city = $model->city;
                    $message = $model->message;

                    $date = $model->posted_on;


                    if ($model->save() == true) {

                        $result = "
          <p><b>Name : </b><br>$name</p>
      <p><b>Email : </b><br>$email</p>
     <p><b>City : </b><br>$city</p>
      <p><b>Sent On : </b><br>$date</p>
      <p><b>Message : </b><br>$message</p>
                       
                        ";
                        return json_encode($data = [
                                'result' => $result,
                                'id'     => $model->id
                        ]);
                    }
                }
            }

        }
        return false;
    }
}

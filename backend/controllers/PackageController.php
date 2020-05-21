<?php

namespace backend\controllers;

use common\components\Helper;
use common\components\HelperPackage;
use common\components\Misc;
use common\models\City;
use common\models\generated\PackageCategory;
use common\models\generated\PackageRequest;
use common\models\generated\PackageReview;
use common\models\Package;
use phpDocumentor\Reflection\Types\Null_;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
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
        $c = HelperPackage::getCategories();
        $a = HelperPackage::getCities();
        $cities = [];
        foreach ($a as $city) {
            $cities[$city['name']] = null;
        }
        $post = [];
        $category = array();
        if ($id != '') {
            $id = Misc::decodeUrl($id);
            $post = Package::find()
                           ->where(['id' => $id])
                           ->asArray()
                           ->with('category')
                           ->one();
            
            if($post['category']!='') {
                $parent_id = $post['category']['parent'];
                if($post['category']['parent']>0) {
                    $parent = PackageCategory::find()->where(['id'=>$parent_id])->asArray()->one();
                    $category = [
                            'child' => $post['category']['name'],
                            'parent' =>$parent['name']
                    ];
                }
                else{
                    $category = [
                            'child' => $post['category']['name'],
                            'parent' =>''
                    ];
                }
            }
        }

        //        HelperPackage::makeJsonList(HelperPackage::getCities(), 'name')
        return $this->render('form', [
                'category' => $category,
                'category_list' => $c,
                'city'     => json_encode($cities),
                'editable' => $post,
        ]);
    }

    public function actionUpdate() {
        $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
        $value = Yii::$app->request->post();

        if (isset($_POST['post'])) {
            $updated = HelperPackage::set($_POST['post'], $image, $value);
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

    public function actionCategory($id = '') {
        $id = Misc::decodeUrl($id);

        return $this->render('category/index.php', [
                'categories' => HelperPackage::getCategory(),
                'editable'   => ($id > 0) ? PackageCategory::findOne($id) : false,
        ]);
    }

    public function actionCategoryUpdate() {
        if (isset($_POST['category'])) {
            $updated = HelperPackage::setCategory($_POST['category']);
            if ($updated != false) {
                Misc::setFlash('success', 'Category Updated.');
                return $this->redirect(Yii::$app->request->baseUrl . '/package/category/');
            }
            else {
                Misc::setFlash('danger', 'Category Not Updated.');
                return $this->redirect(Yii::$app->request->baseUrl . '/package/category/');
            }
        }

        return $this->redirect(Yii::$app->request->baseUrl . '/package/category');
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

    public function actionCities() {
        $page = 'cities';
        $cities = City::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $this->render('cities/index.php', [
                'cities'   => $cities,

        ]);
    }

    public function actionCityPost($id = '') {
        $post = [];
        if ($id != '') {
            $id = Misc::decodeUrl($id);
            $post = City::findOne($id);
        }
        return $this->render('cities/form', [
                'editable' => $post,
        ]);
    }
    public function actionStore()
    {
        $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
        if (isset($_POST['post'])) {
            $updated = HelperPackage::setCity($_POST['post'],$image);
            if ($updated != false) {
                Misc::setFlash('success', 'City Updated.');
                return $this->redirect(Yii::$app->request->baseUrl . '/package/cities/');
            }
            else {
                Misc::setFlash('danger', 'City Not Updated.');
                return $this->redirect(Yii::$app->request->baseUrl . '/package/cities/');
            }
        }

        return $this->redirect(Yii::$app->request->baseUrl . '/package/cities');

    }
    public function actionReview() {

        return $this->render('review/index', ['packages' => HelperPackage::getReviews()]);
    }

    public function actionRating() {

        return $this->render('rating/index', ['packages' => HelperPackage::getRatings()]);
    }

    public function actionRequest() {

        return $this->render('request/index', ['packages' => HelperPackage::getRequest()]);
    }

    public function actionReadPackage() {
        //        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (\Yii::$app->request->isAjax && $_POST['id']) {
            $id = $_POST['id'];
            if ($id > 0) {
                $model = PackageReview::findOne($id);

                if ($model) {
                    $package = Package::findOne($model->package_id);
                    $package_name = $package['title'];
                    $name = $model->name;
                    $email = $model->email;
                    $city = $model->city;
                    $message = $model->message;
                    $rating = $model->rating;
                    $date = $model->posted_on;

                    if ($model->save() == true) {

                        $result = "
                            <div class='col s6'>
                                  <p><b>Sent On : </b><br>$date</p>
                                      <p><b>Name : </b><br>$name</p>
                                  <p><b>Email : </b><br>$email</p>
                                  <p><b>Message : </b><br>$message</p>
                                  </div>
                                 <div class='col s6'> 
                                  <p><b>Destination : </b><br>$city</p>
                                  <p><b>Rating : </b><br>$rating</p>
                                  <p><b>Package : </b><br>$package_name</p>
                                 
                                  </div>
                       
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
     <p><b>Destination : </b><br>$city</p>
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

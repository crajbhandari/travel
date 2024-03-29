<?php

namespace backend\controllers;

use common\components\Helper;
use common\components\HelperBlog;
use common\components\HelperCities;
use common\components\HelperLanguage;
use common\components\HelperPackage;
use common\components\Misc;
use common\models\BlogTranslation;
use common\models\City;
use common\models\generated\CityTranslation;
use common\models\generated\PackageCategoryTranslation;
use common\models\PackageCategory;
use common\models\generated\PackageRequest;
use common\models\generated\PackageReview;
use common\models\Language;
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
//        $c = HelperPackage::getCategories();
//        $a = HelperPackage::getCities();
//        $cities = [];
//        foreach ($a as $city) {
//            $cities[$city['name']] = null;
//        }
//        $post = [];
//        $category = [];
//        if ($id != '') {
//            $id = Misc::decodeUrl($id);
//            $post = Package::find()
//                           ->where(['id' => $id])
//                           ->asArray()
//                           ->with('category')
//                           ->one();
//
//            if ($post['category'] != '') {
//                $parent_id = $post['category']['parent'];
//                if ($post['category']['parent'] > 0) {
//                    $parent = PackageCategory::find()->where(['id' => $parent_id])->asArray()->one();
//                    $category = [
//                            'child'  => $post['category']['name'],
//                            'parent' => $parent['name']
//                    ];
//                }
//                else {
//                    $category = [
//                            'child'  => $post['category']['name'],
//                            'parent' => ''
//                    ];
//                }
//            }
//        }

        //        HelperPackage::makeJsonList(HelperPackage::getCities(), 'name')
        return $this->render('form', [
//                'category'      => $category,
//                'category_list' => $c,
//                'city'          => json_encode($cities),
//                'editable'      => $post,
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

    public function actionCategory() {
        $categories = \common\models\PackageCategoryTranslation::find()->orderBy(['id' => SORT_DESC])->asArray()->with('info')->all();
        $language = Language::find()->asArray()->all();

        return $this->render('category\index', [
                'language' => $language,
                'categories'   => $categories,
        ]);
    }
    public function actionCategoryPost($id = '') {
        $post = [];
        $post2 = [];
        $ln_code = '';
        if ($id != '') {
            $id = Misc::decrypt($id);
            $explode = explode('-', $id);
            $ln_code = $explode[0];
            $id = $explode[1];
            $post = HelperPackage::getSingleCategoryTranslation($id, $ln_code);
            $post2 = HelperPackage::getSingleCategory($id);
        }
        $categories = PackageCategory::find()->orderBy(['id' => SORT_DESC])->asArray()->all();

        foreach ($categories as $c => $b) {
            $name = HelperPackage::getEnglishCategory($b['id']);
            $categories[$c]['name'] = $name['name'];
        }

        return $this->render('category/form', [
                'editable'  => $post2,
                'editable2' => $post,
                'all'       => HelperLanguage::getAllLanguage(),
                'language'  => $ln_code,
                'categories'    => $categories
        ]);
    }

    public function actionCategoryUpdate() {
        if (isset($_POST['post'])) {
            $updated = HelperPackage::setCategory($_POST['post']);
            if ($updated != false) {
                return $this->redirect(Yii::$app->request->baseUrl . '/package/category-post/' . Misc::encrypt($updated['language_code'] . '-' . $updated['package_category_id']));
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
        $cities = \common\models\CityTranslation::find()->orderBy(['id' => SORT_DESC])->asArray()->with('info')->all();
        $language = Language::find()->asArray()->all();
        return $this->render('cities\index', [
                'language' => $language,
                'cities'   => $cities,
        ]);
    }

    public function actionCityPost($id = '') {
        $post = [];
        $post2 = [];
        $ln_code = '';
        if ($id != '') {
            $id = Misc::decrypt($id);
            $explode = explode('-', $id);
            $ln_code = $explode[0];
            $id = $explode[1];
            $post = HelperCities::getSingleCityTranslation($id, $ln_code);
            $post2 = HelperCities::getSingleCity($id);
        }
        //        $cities = \common\models\CityTranslation::find()->orderBy(['id' => SORT_DESC])->asArray()->with('info')->all();
        $cities = City::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
        foreach ($cities as $c => $b) {
            $name = HelperPackage::getEnglishName($b['id']);
            //            array_push($cities[$c],$name);
            $cities[$c]['name'] = $name['name'];
            //            array_merge($cities[$c],HelperPackage::getEnglishName($b['id']));
        }

        return $this->render('cities/form', [
                'editable'  => $post2,
                'editable2' => $post,
                'all'       => HelperLanguage::getAllLanguage(),
                'language'  => $ln_code,
                'cities'    => $cities
        ]);
    }

    public function actionStore() {
        $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
        if (isset($_POST['post'])) {
            $updated = HelperCities::set($_POST['post'], $image);
            if ($updated != false) {
                return $this->redirect(Yii::$app->request->baseUrl . '/package/city-post/' . Misc::encrypt($updated['language_code'] . '-' . $updated['city_id']));
            }
        }
        return $this->redirect(Yii::$app->request->baseUrl . '/package/cities');
    }

    public function actionReview() {

        return $this->render('review/index', [
                'packages' => HelperPackage::getReviews(),
                'ratings'  => HelperPackage::getRatings()
        ]);
    }

    public function actionRating() {

        return $this->render('rating/index', ['packages' => HelperPackage::getRatings()]);
    }

    public function actionRequest() {

        return $this->render('request/index', ['packages' => HelperPackage::getRequest()]);
    }

    public function actionReadReview() {
        //                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (\Yii::$app->request->isAjax && $_POST['id']) {
            $id = $_POST['id'];
            if ($id > 0) {
                $model = PackageReview::findOne($id);

                if ($model) {
                    $package = PackageTranslation::find()->where('package_id=' . $model->package_id)->asArray()->one();

                    $package_name = $package['title'];
                    $name = $model->name;
                    $email = $model->email;
                    $city = $model->city;
                    $message = $model->message;
                    $rating = $model->rating;
                    $date = $model->posted_on;


                    $result = "
<div class='row'>
                            <div class='col s6'>
                                  <p><b>Sent On : </b><br>$date</p>
                                      <p><b>Name : </b><br>$name</p>
                                  <p><b>Email : </b><br>$email</p>
                                  <p><b>Message : </b><br>$message</p>
                                  </div>
                                 <div class='col s6'> 
                                  <p><b>Package : </b><br>$package_name</p>
                                  <p><b>City : </b><br>$city</p>
                                  <p><b>Rating : </b><br>$rating</p>
                                 
                                  </div>
                       </div>
                        ";
                    return json_encode($data = [
                            'result' => $result,
                            'id'     => $model->id
                    ]);
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
                    $phone = $model->phone;
                    $traveller = $model->no_traveller;
                    $dept_date = $model->departure_date;
                    $adult_no = $model->adult_no;
                    $children_no = $model->children_no;
                    $max_price = $model->max_price;
                    $min_price = $model->min_price;
                    $message = $model->message;
                    $date = $model->posted_on;


                    if ($model->save() == true) {

                        $result = "
      <p><b>Name : </b>$name</p>
      <p><b>Email : </b>$email</p>
      <p><b>Phone : </b>$phone</p>
      <p><b>No Of Traveller : </b>$traveller</p>
      <p><b>No Of Adult : </b>$adult_no</p>
      <p><b>No Of Children : </b>$children_no</p>
      <p><b>Maximum Price : </b>$max_price</p>
      <p><b>Minimum Price : </b>$min_price</p>
      <p><b>Destination : </b>$city</p>
      <p><b>Departure Date : </b>$dept_date</p>
      <p><b>Sent On : </b>$date</p>
      <p><b>Message : </b>$message</p>
                       
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

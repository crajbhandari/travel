<?php

namespace backend\controllers;

use common\components\Helper;
use common\models\Amenities;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use common\components\Misc;
use common\components\HelperAmenities;
use Yii;
use yii\web\Request;


/**
 * Amenities controller
 */
class AmenitiesController extends Controller {
    public $permissions;

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
    public function actionIndex($id = '') {
        $id = Misc::decodeUrl($id);
        return $this->render('index', [
                'all'           => Amenities::find()->orderBy(['id' => SORT_DESC])->all(),
                'editable'      => Amenities::findOne($id),
                //                'is_authorized' => in_array('update', $this->permissions)
        ]);
    }

    public function actionUpdate() {

        if (isset($_POST['amenities'])) {
            $updated = HelperAmenities::set($_POST['amenities']);
            if ($updated != FALSE) {
                Misc::setFlash('success', 'Amenities Updated.');
                return $this->redirect(Yii::$app->request->baseUrl . '/amenities/edit/'. Misc::encodeUrl($updated['id']));
            }
        }

        return $this->redirect(Yii::$app->request->baseUrl . '/amenities/');
    }
}
